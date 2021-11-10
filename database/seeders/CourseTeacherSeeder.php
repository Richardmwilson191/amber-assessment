<?php

namespace Database\Seeders;

use App\Models\CourseTeacher;
use Illuminate\Database\Seeder;

class CourseTeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseTeachers = [
            [
                'course_id' => 1,
                'teacher_id' => 3
            ],
            [
                'course_id' => 5,
                'teacher_id' => 3
            ],
            [
                'course_id' => 2,
                'teacher_id' => 2
            ],
            [
                'course_id' => 3,
                'teacher_id' => 1
            ],
            [
                'course_id' => 4,
                'teacher_id' => 1
            ],
            [
                'course_id' => 6,
                'teacher_id' => 4
            ],
            [
                'course_id' => 7,
                'teacher_id' => 4
            ],
        ];

        CourseTeacher::insert($courseTeachers);
    }
}
