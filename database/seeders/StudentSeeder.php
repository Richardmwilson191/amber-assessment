<?php

namespace Database\Seeders;

use App\Models\Student;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [
            ['user_id' => 1],
            ['user_id' => 3],
            ['user_id' => 2],
            ['user_id' => 5],
            ['user_id' => 4],
        ];

        Student::insert($students);
    }
}
