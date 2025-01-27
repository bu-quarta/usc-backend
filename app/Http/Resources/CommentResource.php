<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Auth;

class CommentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'user' => $this->user ? [
                'id' => $this->user->id,
                'name' => $this->user->name,
                'email' => $this->user->email,
                'avatar' => $this->user->avatar,
            ] : null,
            'content' => $this->content,
            'likes' => $this->likes->where('is_active', true)->count(),
            'dislikes' => $this->dislikes->where('is_active', true)->count(),
            'liked' => $this->likes
                ->where('user_id', Auth::id())
                ->where('is_active', true)
                ->isNotEmpty(),
            'disliked' => $this->dislikes
                ->where('user_id', Auth::id())
                ->where('is_active', true)
                ->isNotEmpty(),
            'created_at' => $this->created_at->diffInHours(now()) < 24
                ? $this->created_at->diffForHumans()
                : $this->created_at->format('M d, Y'),
            'created_at_iso' => $this->created_at->toIso8601String(),
        ];
    }
}
