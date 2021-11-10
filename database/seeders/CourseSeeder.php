<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = [
            [
                'teacher_id' => 1,
                'course_nm' => 'Math',
                'cost' => 4000
            ],
            [
                'teacher_id' => 2,
                'course_nm' => 'English',
                'cost' => 4500
            ],
            [
                'teacher_id' => 1,
                'course_nm' => 'History',
                'cost' => 3000
            ],
            [
                'teacher_id' => 3,
                'course_nm' => 'Physics',
                'cost' => 4000
            ],
            [
                'teacher_id' => 4,
                'course_nm' => 'Chemistry',
                'cost' => 5000
            ],
            [
                'teacher_id' => 2,
                'course_nm' => 'Biology',
                'cost' => 5000
            ],
            [
                'teacher_id' => 3,
                'course_nm' => 'Accounting',
                'cost' => 5500
            ],
        ];

        Course::insert($courses);
    }
}
