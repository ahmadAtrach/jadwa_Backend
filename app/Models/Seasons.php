<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seasons extends Model
{
    use HasFactory;
    protected $fillable= [
        "season_period",
        "season_productivity",
        "honey_productivity_id",
    ];

    public function productivity()
    {
        return $this->belongsTo(Productivity::class);
    }
}
