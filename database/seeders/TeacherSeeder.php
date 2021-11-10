<?php

namespace Database\Seeders;

use App\Models\Teacher;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            ['user_id' => 6],
            ['user_id' => 7],
            ['user_id' => 8],
            ['user_id' => 9],
        ];

        Teacher::insert($teachers);
    }
}
