<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseTeacher extends Model
{
    use HasFactory;

    public $fillable = [
        'course_id',
        'teacher_id'
    ];

    public function courses()
    {
        return $this->hasMany(Courses::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
