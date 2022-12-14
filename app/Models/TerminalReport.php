<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TerminalReport extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function class()
    {
        return $this->belongsTo(Classes::class);
    }

    public function term()
    {
        return $this->belongsTo(Term::class);
    }

    public function grade()
    {
        return $this->belongsTo(GradeSystem::class);
    }
}