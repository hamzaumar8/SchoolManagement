<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'addmission_number',
        'index_number',
        'first_name',
        'surname',
        'other_name',
        'gender',
        'birthdate',
        'class_type',
        'campus',
    ];

    // public static function booted()
    // {
    //     static::creating(function ($model) {

    //         $model->index_number = 'PRT';
    //     });
    // }


    public function class(): BelongsTo
    {
        return $this->belongsTo(Classes::class);
    }

    public function addmission()
    {
        return $this->belongsTo(Addmission::class);
    }

    public function health()
    {
        return $this->hasOne(HealthStatus::class);
    }

    public function parentguardian()
    {
        return $this->hasMany(ParentGuardian::class);
    }

    public function emergencycontact()
    {
        return $this->hasMany(EmergencyContact::class);
    }
}