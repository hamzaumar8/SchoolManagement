<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParentGuardian extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'occupation',
        'home_digital_address',
        'relation',
    ];

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}