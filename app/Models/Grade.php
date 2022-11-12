<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $fillable = [
        'grade_id',
        'student_id',
        'cat1',
        'gw',
        'cat2',
        'exam',
        'final_exam',
        'total',
        'grade',
    ];


    public function gradesystem()
    {
        return $this->belongsTo(GradeSystem::class, 'grade_id');
    }

    public function student()
    {
        return $this->belongsTo(Student::class, 'student_id');
    }

    public function continious_assesment()
    {
        return ($this->cat1 + $this->gw + $this->cat2);
    }

    // =IF(W96="IC","IC",
    // IF(W96>=79.45,"A",
    // IF(W96>=74.45,"B+",
    // IF(W96>=69.45,"B",
    // IF(W96>=64.45,
    // "C+",
    // IF(W96>=59.45,
    // "C",
    // IF(W96>=54.45,
    // "D+",
    // IF(W96>=49.45,"D",
    // "E"

}