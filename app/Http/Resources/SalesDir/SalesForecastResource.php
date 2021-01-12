<?php

namespace App\Http\Resources\SalesDir;

use App\Models\Products;
use Illuminate\Http\Resources\Json\JsonResource;

class SalesForecastResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            'id'=>$this->id,
            'products'=>ProductResource::collection($this->Products)
        ];
    }
}
