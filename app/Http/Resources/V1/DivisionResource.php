<?php

namespace App\Http\Resources\V1;

use App\Http\Resources\V1\BuilderResource;
use Illuminate\Http\Resources\Json\JsonResource;

class DivisionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'state' => $this->state,
            'latitude' => $this->latitude,
            'longitude' => $this->longitude,
        ];
    }
}