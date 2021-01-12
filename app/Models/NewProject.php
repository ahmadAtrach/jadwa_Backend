<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewProject extends Model
{
    use HasFactory;
    protected $fillable=[
        "inv",
        "nature_of_project",
        "inv_term",
        "grace_period",
        "project_contributing",
        "contributing_amount",
        "contributing_covering"
    ];
}
