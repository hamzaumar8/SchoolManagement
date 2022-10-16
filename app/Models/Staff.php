<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory;

    protected $table = "staff";

    protected $fillable = [
        'staff_number',
        'staff_type',
        'title',
        'full_name',
        'gender',
        'email',
        'phone1',
        'phone2',
        'postal_address',
        'residential_address',
        'birthdate',
        'nationality',
        'marital_status',
        'passport_picture',
    ];

    public static function booted()
    {
        static::creating(function ($model) {
            $model->uuid = Str::uuid();
            $model->token = Str::random(32);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function classes(): HasMany
    {
        return $this->hasMany(Classes::class);
    }

    public function class_subject(): HasMany
    {
        return $this->hasMany(ClassesSubject::class);
    }
}