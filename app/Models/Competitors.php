<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competitors extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'advantage',
        'weaknesses',
        'quality',
        'price',
        'market_analyses_id'
    ];
    public function marketAnalysis()
    {
        return $this->belongsTo(MarketAnalysis::class);
    }
}
