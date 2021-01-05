<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInfo extends Model
{
    use HasFactory;
    protected $fillable=[
        'name',
        'birthday',
        'gender',
        'martial_status',
        'level_of_education',
        'major',
        'university',
        'industry',
        'years_of_experience'
    ];
}
