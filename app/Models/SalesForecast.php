<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesForecast extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_products'
    ];
    public function products()
    {
        return $this->hasMany(Products::class ,'sales_forecasts_id');
    }
}
