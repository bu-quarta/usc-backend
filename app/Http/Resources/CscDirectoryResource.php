<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CscDirectoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'abbr' => $this->abbr,
            'slug' => $this->slug,
            'email' => $this->email,
            'location' => $this->location,
            'image_url' => $this->image_url,
        ];
    }
}
