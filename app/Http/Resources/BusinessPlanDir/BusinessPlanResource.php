<?php

namespace App\Http\Resources\BusinessPlanDir;

use App\Http\Resources\AboutTheBusinessDir\AboutTheBusinessResource;
use App\Http\Resources\AboutThePremisesDir\AboutThePremisesResource;
use App\Http\Resources\IncomeDir\IncomeResource;
use App\Http\Resources\MarketAnalysis\MarketAnalysisResource;
use App\Http\Resources\NewProjectDir\NewProjectResource;
use App\Http\Resources\PersonalinfoDir\PersonalInfoResource;
use App\Http\Resources\SalesDir\ProductResource;
use App\Http\Resources\SalesDir\SalesForecastResource;
use App\Models\Income;
use App\Models\Productivity;
use Illuminate\Http\Resources\Json\ResourceCollection;

class BusinessPlanResource extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'user_id' => $this->user_id,
            'sector_id' => $this->sector_id,
            'personal_info' => PersonalInfoResource::collection($this->PersonalInfo),
            'income' => IncomeResource::collection($this->Income),
            'about_the_business' => AboutTheBusinessResource::collection($this->AboutTheBusiness),
            'about_the_premises' => AboutThePremisesResource::collection($this->AboutThePremises),
            'newProjects' =>  NewProjectResourcero::collection($this->NewProject),
            'productivity' => ProductResource::collection($this->Productivity),
            'marketAnalysis' => MarketAnalysisResource::collection($this->MarketAnalysis),
            'salesForecasts' => SalesForecastResource::collection($this->SalesForecast),
        ];
    }
}
