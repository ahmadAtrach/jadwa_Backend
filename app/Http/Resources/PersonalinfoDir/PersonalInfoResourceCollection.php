<?php

namespace App\Http\Resources\PersonalinfoDir;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PersonalInfoResourceCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
