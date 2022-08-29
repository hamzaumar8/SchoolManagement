<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
        'surname',
        'other_name',
        'gender',
        'birthdate',
        'birthplace',
        'religion',
        'nationality',
        'home_town',
        'home_digital_address',
        'postal_address',
        'first_language',
        'previous_school',
        'email',
        'class_id',
        'class_type',
        'term',
        'accomodation_type',
        'phone',
        'date_admitted',
        'picture',
        'hpa',
    ];
}