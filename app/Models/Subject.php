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



    public function gradesSystem()
    {
        return $this->hasMany(GradeSystem::class, 'subject_id');
    }

    public function oneGradesSystemStatus($term_id, $class_id, $subject_id)
    {
        $check = $this->hasMany(GradeSystem::class, 'subject_id')->where('term_id', $term_id)->where('class_id', $class_id)->where('subject_id', $subject_id)->first();

        $return = 'not submitted';
        if ($check)
            $return = $check->status;
        return $return;
    }
}