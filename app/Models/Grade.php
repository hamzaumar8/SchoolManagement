<?php

namespace App\Models;

use APP\Helpers\Helper;
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

    public static function booted()
    {
        static::creating(function ($model) {
            $model->grade = Helper::grade_no($model->total);
        });
    }

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
        if ($this->cat1 == 0 || $this->gw == 0 || $this->cat2 == 0) {
            $cat  = 'IC';
        } else {
            $cat = ($this->cat1 + $this->gw + $this->cat2);
        }
        return $cat;
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


    public function grade_remark()
    {
        if ($this->continious_assesment() == 'IC') {
            $remark = 'IC';
        } elseif ($this->total >= 70) {
            $remark = 'EXCELLENT';
        } elseif ($this->total >= 75) {
            $remark = 'VERY GOOD';
        } elseif ($this->total >= 70) {
            $remark = 'GOOD';
        } elseif ($this->total >= 60) {
            $remark = 'AVERAGE';
        } elseif ($this->total >= 55) {
            $remark = 'BELOW AVERAGE';
        } elseif ($this->total >= 50) {
            $remark = 'PASS';
        } elseif ($this->total >= 40) {
            $remark = 'WEAK PASS';
        } else {
            $remark = 'FAIL';
        }
        return $remark;
    }
}