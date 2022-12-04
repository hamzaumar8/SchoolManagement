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

    // public static function booted()
    // {
    //     static::creating(function ($model) {
    //         $model->grade = Helper::grade_no($model->total);
    //     });
    // }

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
        // if ($this->cat1 == 0 || $this->gw == 0 || $this->cat2 == 0) {
        //     $cat  = 'IC';
        // } else
        if (is_numeric($this->cat1) && is_numeric($this->gw) && is_numeric($this->cat2)) {
            $cat = (int)($this->cat1 + $this->gw + $this->cat2);
        } else {
            $cat = 'IC';
        }
        return $cat;
    }
    public function exam_score()
    {
        return (int)($this->final_exam);
    }

    public function total_score()
    {
        return (int)($this->total);
    }

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