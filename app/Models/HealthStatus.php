<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthStatus extends Model
{
    use HasFactory;


    protected $fillable = [
        'chronic_health_problem',
        'chp_report',
        'diagnose_physical_challenge',
        'dpc_report'
    ];


    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}