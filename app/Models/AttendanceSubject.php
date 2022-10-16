<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AttendanceSubject extends Model
{
    use HasFactory;
    protected $table = 'attendance_student';

    protected $guarded = [];
}