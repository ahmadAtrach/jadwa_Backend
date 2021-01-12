<?php

namespace App\Http\Resources\ProductivityDir;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductivityResource extends JsonResource
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
            'number_of_beehives' => $this->number_of_beehives,
            'p_unit'=> $this->p_unit,
            'is_sales_seasonal'=> $this->is_sales_seasonal,
            'other_items' => $this->other_items,
            'seasons' => SeasonResource::collection($this->Seasons)
        ];
    }
}
