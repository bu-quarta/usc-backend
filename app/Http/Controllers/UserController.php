<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    // Get all users
    public function index()
    {
        return response()->json(User::with('roles')->get(), 200);
    }

    // Get a single user
    public function show($id)
    {
        $user = User::with('roles')->find($id);
        return $user ? response()->json($user, 200) : response()->json(['message' => 'User not found'], 404);
    }

    // Create user and assign role (Restrict Email Domain)
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => ['required', 'email', 'unique:users,email', 'regex:/^[a-zA-Z0-9._%+-]+@bicol-u\.edu\.ph$/'],
            'role' => 'required|string|in:admin,pio,auditor,ivc'
        ]);

        // Check if role exists in database
        $role = Role::where('name', $request->role)->first();
        if (!$role) {
            return response()->json(['message' => 'Invalid role'], 400);
        }

        // Create user WITHOUT PASSWORD
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email
        ]);

        // Assign role
        $user->assignRole($role);
    }

    // Update user and role
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $request->validate([
            'name' => 'sometimes|string|max:255',
            'email' => ['sometimes', 'email', 'unique:users,email,' . $id, 'regex:/^[a-zA-Z0-9._%+-]+@bicol-u\.edu\.ph$/'],
            'role' => 'sometimes|string|in:admin,pio,auditor,ivc'
        ]);

        $user->update([
            'name' => $request->name ?? $user->name,
            'email' => $request->email ?? $user->email
        ]);

        // Update role if provided
        if ($request->has('role')) {
            $role = Role::where('name', $request->role)->first();
            if (!$role) {
                return response()->json(['message' => 'Invalid role'], 400);
            }
            $user->syncRoles([$role]);
        }
    }

    // Delete user
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return response()->json(['message' => 'User not found'], 404);
        }

        $user->delete();
    }
}
