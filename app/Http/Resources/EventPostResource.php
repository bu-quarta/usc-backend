<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventPostResource extends JsonResource
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
            'title' => $this->header,
            'description' => $this->description,
            'date_time' => $this->date_time->format('F j, Y | g:i A'),
            'location' => $this->location,
            'image_url' => $this->image_path,
            'status' => $this->status,
            'date_posted' => $this->created_at->format('F j, Y'),
            'date_time_posted' => $this->date_time->format('F j, Y | g:i A'),
        ];
    }
}
