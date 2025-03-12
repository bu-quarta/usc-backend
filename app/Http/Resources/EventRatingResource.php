<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class EventRatingResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'event_id' => $this->event_id,
            'user_id' => $this->user_id,
            'rating' => $this->rating,
            'created_at' => $this->created_at->format('F j, Y, g:i a'),
            'user' => [
                'id' => $this->user->id,
                'name' => $this->user->name
            ]
        ];
    }
}
