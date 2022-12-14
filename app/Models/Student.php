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


    public function fullname()
    {
        return $this->other_name ? $this->first_name . ' ' . $this->other_name . ' ' . $this->surname : $this->first_name . ' ' . $this->surname;
    }

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

    public function attendances()
    {
        return $this->belongsToMany(Attendance::class);
    }

    public function attendanceStudent()
    {
        return $this->hasMany(AttendanceStudent::class);
    }

    public function attendanceCount()
    {
        $term = session()->get('CurrTerm');
        return $this->belongsToMany(Attendance::class)->where('term_id', $term->id)->where('class_id', $this->class->id)->count();
    }

    // TODO: find a better way to go about this
    public function studentAttendancePrsesnt()
    {
        $term = session()->get('CurrTerm');
        $ttht = $this->belongsToMany(Attendance::class)->where('term_id', $term->id)->where('class_id', $this->class->id)->get();
        $count = 0;
        foreach ($ttht as $th) {
            $count += $this->hasMany(AttendanceStudent::class)->where('attendance_id', $th->id)->where('status', 1)->count();
        }
        return $count;
    }

    public function studentAttendanceAdsent()
    {
        $term = session()->get('CurrTerm');
        $ttht = $this->belongsToMany(Attendance::class)->where('term_id', $term->id)->where('class_id', $this->class->id)->get();
        $count = 0;
        foreach ($ttht as $th) {
            $count += $this->hasMany(AttendanceStudent::class)->where('attendance_id', $th->id)->where('status', 0)->count();
        }
        return $count;
    }




    // public function attendance_student()
    // {
    //     return $this->belongsTo(AttendanceStudent::class);
    // }



    public function terminal_reports()
    {
        return $this->hasMany(TerminalReport::class);
    }

    public function terminalReportsGenerate($term_id, $class_id)
    {
        $trg = $this->hasMany(TerminalReport::class)->where('term_id', $term_id)->where('class_id', $class_id)->first();
        $return = 0;
        if ($trg) {
            $return = 1;
        }
        return $return;
    }


    public function grades()
    {
        return $this->hasMany(Grade::class);
    }

    public function gradesystemstudent($term_id, $subject_id, $class_id)
    {
        return GradeSystem::where('term_id', $term_id)->where('subject_id', $subject_id)->where('class_id', $class_id)->first();
    }

    public function gradessubjecttaff($term_id, $subject_id, $class_id)
    {
        return $this->gradesystemstudent($term_id, $subject_id, $class_id)->staff;
    }

    public function tgrades($term_id, $subject_id, $class_id, $student_id)
    {
        $gs = $this->gradesystemstudent($term_id, $subject_id, $class_id);
        return Grade::where('grade_id', $gs->id)->where('student_id', $student_id)->first();
    }

    public function studentTotalScoreGrades($term_id, $class_id, $student_id)
    {
        $gs = GradeSystem::where('term_id', $term_id)->where('class_id', $class_id)->get();

        $total = 0;

        $vv = array();
        foreach ($gs as $g) {
            $gd = Grade::where('grade_id', $g->id)->where('student_id', $student_id)->first();
            if ($gd) {
                $total += $gd->total;
            }
        }
        return ((int)($total));
    }

    public function classPosition($term_id, $class_id, $student_id)
    {
        $studentTotal = $this->studentTotalScoreGrades($term_id, $class_id, $student_id);
        $students = Student::where('class_id', $class_id)->get();
        $totals = array();
        foreach ($students as $stu) {
            $totals[] = $this->studentTotalScoreGrades($term_id, $class_id, $stu->id);
        }
        rsort($totals);
        $positionKey = array_search($studentTotal, $totals);
        $position = ((int)($positionKey + 1));
        return $position;
    }

    public function overallClassPosition($term_id, $class_id, $student_id)
    {
        $class = Classes::findOrFail($class_id);
        $studentTotal = $this->studentTotalScoreGrades($term_id, $class_id, $student_id);
        $classes = Classes::where('name', $class->name)->get();
        $totals = array();
        foreach ($classes as $cls) {
            if ($cls) {
                foreach ($cls->students as $stu) {
                    $totals[] = $this->studentTotalScoreGrades($term_id, $class_id, $stu->id);
                }
            }
        }
        rsort($totals);
        $positionKey = array_search($studentTotal, $totals);
        $position = ((int)($positionKey + 1));
        return $position;
    }


    public function studentTotalPresentAttendanceReport($term_id, $class_id, $student_id)
    {
        $ttht = $this->belongsToMany(Attendance::class)->where('term_id', $term_id)->where('class_id', $class_id)->get();
        $count = 0;
        foreach ($ttht as $th) {
            $count += $this->hasMany(AttendanceStudent::class)->where('attendance_id', $th->id)->where('status', 1)->count();
        }
        return $count;
    }

    public function studentTotalAttendanceReport($term_id, $class_id, $student_id)
    {
        return $this->belongsToMany(Attendance::class)->where('term_id', $term_id)->where('class_id', $class_id)->count();
    }

    public function classEnrollmentTotal($term_id, $class_id, $student_id)
    {
        return $this->class->students->count();
    }

    public function classOverallEnrollmentTotal($class_name)
    {
        $cls = Classes::where('name', $class_name)->get();
        $total = 0;
        foreach ($cls as $class) {
            $total += $class->students->count();
        }
        return $total;
    }



    public function nursery_grades()
    {
        return $this->hasMany(NurseryGrade::class);
    }
}