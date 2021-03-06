<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sector extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'description',
        'icon'
    ];
    public function businessPlan()
    {
        return $this->hasMany(BusinessPlan::class ,'sector_id');
    }
}
