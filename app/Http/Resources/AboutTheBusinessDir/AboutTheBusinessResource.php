<?php

namespace App\Http\Resources\AboutTheBusinessDir;

use Illuminate\Http\Resources\Json\JsonResource;

class AboutTheBusinessResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'business' => $this->business,
            'Fulltimers' => FulltimersResource::collection($this->Fulltimers),
        ];
    }
}
