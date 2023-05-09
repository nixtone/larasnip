<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class VersionResource extends JsonResource
{
    public static $wrap = 'testres';
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'title' => $this->title,
            'release_date' => $this->release_date->format('d.m.Y'),
            'meta' => $this->when($this->title == '8.61', function() {
                return 'true match';
            }, function() {
                return 'false match';
            }),
        ]; // parent::toArray($request);
    }
}
