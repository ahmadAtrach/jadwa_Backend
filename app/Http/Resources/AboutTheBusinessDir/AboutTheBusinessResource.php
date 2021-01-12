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
            'brand_name' => $this->brand_name,
            'establishment_date' => $this->establishment_date,
            'number_beehives' => $this->number_beehives,
            'clients' => $this->clients,
            'annual_revenue' => $this->annual_revenue,
            'employment_date' => $this->employment_date,
            'is_side_business' => $this->is_side_business,
            'business_info' => $this->business_info,
            'business_location' => $this->business_location,
            'business_duration' => $this->business_duration,
            'business_average_salary' => $this->business_average_salary,
            'fulltimers' => FulltimersResource::collection($this->Fulltimers),
            'listOfEquipments' => ListOfEquipmentResource::collection($this->ListOfEquipment)
        ];
    }
}
