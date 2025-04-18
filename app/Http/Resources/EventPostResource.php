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
            'slug' => $this->slug,
            'by' => explode('😊', $this->by),
            'layout_by' => $this->layout_by,
            'photo_by' => $this->photo_by,
            'description' => $this->description,
            'date_time' => $this->date_time->format('F j, Y'),
            'location' => $this->location,
            'image_url' => $this->image_path,
            'status' => $this->status,
            'date_posted' => $this->created_at->format('F j, Y'),
            'date_time_posted' => $this->date_time->format('F j, Y | g:i A'),
            'evaluation_form' => $this->evaluation_form,
        ];
    }
}
