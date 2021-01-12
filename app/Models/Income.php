<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable=[
        "is_income",
        "income",
        "is_employed",
        "employing_place",
        "employment_job",
        "employment_date",
        "employment_salary",
        "is_side_business",
        "business_info",
        "business_location",
        "business_date",
        "business_average_salary"
    ];
}
