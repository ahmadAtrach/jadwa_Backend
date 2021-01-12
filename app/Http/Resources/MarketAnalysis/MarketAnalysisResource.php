<?php

namespace App\Http\Resources\MarketAnalysis;

use Illuminate\Http\Resources\Json\JsonResource;

class MarketAnalysisResource extends JsonResource
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
            'id' => $this->id,
            'advantage' => $this->advantage,
            'weaknesses' => $this->weaknesses,
            'quality'=> $this->quality,
            'price' => $this->price,
            'competitors' => CompetitorResource::collection($this->Competitors)
        ];
    }
}
