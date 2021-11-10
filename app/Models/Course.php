<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;

    public $fillable = [
        'teacher_id',
        'course_nm',
        'cost'
    ];

    public function courseSchedules()
    {
        return $this->hasMany(CourseSchedule::class);
    }


    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    // public function courseTeacher()
    // {
    //     return $this->belongsTo(CourseTeacher::class);
    // }
}
