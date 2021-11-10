<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            TeacherSeeder::class,
            CourseSeeder::class,
            StudentSeeder::class,
            CourseTeacherSeeder::class,
            CourseScheduleSeeder::class,
            TeacherStudentSeeder::class,
        ]);
    }
}
