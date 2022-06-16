<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Driver extends Model
{
    use HasFactory;
    use SoftDeletes;


    protected $table = 'drivers';
    protected $fillable = [
        'lastname',
        'firstname',
        'patronymic',
        'year_of_birth',
        'date_of_employment',
        'driving_experience',
        'photo'
    ];
}
