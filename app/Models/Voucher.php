<?php

namespace App\Models;

use APP\Helpers\Helper;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    use HasFactory;

    protected $fillable = [
        'addmission_number',
        'name',
        'phone',
        'campus',
    ];

    public static function booted()
    {
        static::creating(function ($model) {
            $model->addmission_number = Helper::ADMGenerator(new Voucher, 'addmission_number', 'ADM');
            $model->uuid = Str::uuid();
            $model->token = strtoupper(Str::random(10));
        });
    }
}