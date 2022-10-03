<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Classes extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'house_name',
        'class_type',
        'campus',
    ];

    public function students(): HasMany
    {
        return $this->hasMany(Student::class, "class_id");
    }

    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class, "staff_id");
    }

    public function subjects()
    {
        return $this->belongsToMany(Subject::class, 'classes_subjects', 'class_id', 'subject_id');
    }
}