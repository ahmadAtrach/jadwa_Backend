<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_unit',
        'product_quantity',
        'product_price',
        'sales_forecasts_id',
    ];
    public function SalesForecast()
    {
        return $this->belongsTo(SalesForecast::class);
    }
}
