<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassesSubject extends Model
{
    use HasFactory;


    protected $table = 'classes_subjects';

    protected $guarded = [];


    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function class()
    {
        return $this->belongsTo(Classes::class);
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}