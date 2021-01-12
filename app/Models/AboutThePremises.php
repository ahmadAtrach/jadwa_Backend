<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutThePremises extends Model
{
    use HasFactory;
    protected $fillable=[
        "location",
        "plot_number",
        "plot_area",
        "premises_ownership",
        "number_of_shared",
        "monthly_rent",
        "rent_period",
        "land_surrounding",
        "land_soil_description",
        "land_nature_description",
    ];
}
