<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GradeSystem extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function grades(): HasMany
    {
        return $this->hasMany(Grade::class, 'grade_id');
    }


    public function class()
    {
        return $this->belongsTo(Classes::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }
}