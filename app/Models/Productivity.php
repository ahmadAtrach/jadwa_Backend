<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productivity extends Model
{
    use HasFactory;
    protected $fillable = [
        'number_of_beehives',
        'p_unit',
        'is_sales_seasonal',
        'other_items'
    ];
    public function seasons()
    {
        return $this->hasMany(Seasons::class ,'honey_productivity_id');
    }
}
