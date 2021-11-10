<?php

namespace Database\Seeders;

use App\Models\TeacherStudent;
use Illuminate\Database\Seeder;

class TeacherStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teacherStudents = [
            [
                'teacher_id' => 1,
                'student_id' => 1,
            ],
            [
                'teacher_id' => 1,
                'student_id' => 2,
            ],
            [
                'teacher_id' => 1,
                'student_id' => 3,
            ],
            [
                'teacher_id' => 2,
                'student_id' => 4,
            ],
            [
                'teacher_id' => 3,
                'student_id' => 5,
            ],
            [
                'teacher_id' => 4,
                'student_id' => 4,
            ],
            [
                'teacher_id' => 3,
                'student_id' => 1,
            ],
        ];

        TeacherStudent::insert($teacherStudents);
    }
}
