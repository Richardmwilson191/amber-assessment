<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory;
    // use SoftDeletes;

    public $fillable = [
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function courses()
    {
        return $this->hasMany(Courses::class);
    }


    // public function courseTeacher()
    // {
    //     return $this->hasMany(CourseTeacher::class);
    // }

    public function teacherStudent()
    {
        return $this->hasMany(TeacherStudent::class);
    }
}
