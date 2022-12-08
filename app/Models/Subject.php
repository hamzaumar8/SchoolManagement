<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'type',
        'description',
    ];


    public function classes()
    {
        return $this->belongsToMany(Classes::class, 'classes_subjects', 'subject_id', 'class_id');
    }
}