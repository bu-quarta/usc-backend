<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
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
            'document_id' => $this->document_format,
            'name' => $this->name,
            'status' => $this->statuses->last()?->status ?? null,
            'last_updated' => $this->statuses->last()
                ? Carbon::parse($this->statuses->last()->updated_at)->format('M. d, Y | g:i A')
                : null,
        ];
    }
}
