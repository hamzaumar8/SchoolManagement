<?php

namespace App\Models;

use Illuminate\Contracts\Session\Session;
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
        return $this->belongsToMany(Attendance::class)->where('term_id', $term->id)->count();
    }

    // TODO: find a better way to go about this
    public function studentAttendancePrsesnt()
    {
        $term = session()->get('CurrTerm');
        $ttht = $this->belongsToMany(Attendance::class)->where('term_id', $term->id)->get();
        $count = 0;
        foreach ($ttht as $th) {
            $count += $this->hasMany(AttendanceStudent::class)->where('attendance_id', $th->id)->where('status', 1)->count();
        }
        return $count;
        // return $this->hasMany(AttendanceStudent::class)->count();
    }
    public function studentAttendanceAdsent()
    {
        $term = session()->get('CurrTerm');
        $ttht = $this->belongsToMany(Attendance::class)->where('term_id', $term->id)->get();
        $count = 0;
        foreach ($ttht as $th) {
            $count += $this->hasMany(AttendanceStudent::class)->where('attendance_id', $th->id)->where('status', 0)->count();
        }
        return $count;
        // return $this->hasMany(AttendanceStudent::class)->count();
    }




    // public function attendance_student()
    // {
    //     return $this->belongsTo(AttendanceStudent::class);
    // }
}