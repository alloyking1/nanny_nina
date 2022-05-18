<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'id' => (string) $this->id,
            'name' => (string) $this->name,
            'age' => (int) $this->age,
            "sate" => (string)$this->sate,
            "country" => (string)$this->country,
            "code" => (int)$this->code,
            "email" => (string) $this->email,
            "updated_at" => (string)$this->updated_at,
            "created_at" => (string)$this->created_at,
            // "channel" => new ChannelResource($this->whenLoaded('channel'))
        ];
    }
}
