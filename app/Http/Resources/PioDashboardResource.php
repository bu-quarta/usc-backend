<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PioDashboardResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'totalPosts' => $this['totalPosts'],
            'totalEvents' => $this['totalEvents'],
            'totalNews' => $this['totalNews'],
            'totalComments' => $this['totalComments'],
            'totalReactions' => $this['totalReactions'],
            'popularPosts' => $this['popularPosts'],
            'upcomingEvents' => $this['upcomingEvents'],
        ];
    }
}
