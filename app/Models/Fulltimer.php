<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fulltimer extends Model
{
    use HasFactory;
    protected $fillable= [
        "position",
        "about_the_businesses_id"
    ];

    public function aboutTheBusiness()
    {
        return $this->belongsTo(AboutTheBusiness::class);
    }
}
