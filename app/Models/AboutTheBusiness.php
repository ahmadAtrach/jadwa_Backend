<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Array_;

class AboutTheBusiness extends Model
{
    use HasFactory;
    protected $fillable = [
        'business',
        'brand_name',
        'establishment_date',
        'number_beehives',
        'clients',
        'annual_revenue',
        'employment_date',
        'is_side_business',
        'business_info',
        'business_location',
        'business_duration',
        'business_average_salary',
    ];
    public function fulltimers()
    {
        return $this->hasMany(Fulltimer::class ,'about_the_businesses_id');
    }
    public function listOfEquipment()
    {
        return $this->hasMany(ListofEquipment::class ,'about_the_businesses_id');
    }
}
