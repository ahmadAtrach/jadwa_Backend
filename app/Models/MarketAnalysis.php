<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketAnalysis extends Model
{
    use HasFactory;
    protected $fillable = [
        'advantage',
        'weaknesses',
        'quality',
        'price',
    ];
    public function competitors()
    {
        return $this->hasMany(Competitors::class ,'market_analyses_id');
    }
}
