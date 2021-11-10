<?php

namespace Database\Seeders;

use App\Models\CourseSchedule;
use Illuminate\Database\Seeder;

class CourseScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courseSchedules = [
            [
                'course_id' => 2,
                'day' => 'Monday',
                'start_time' => '9:00 AM',
                'end_time' => '11:00 AM',
            ],
            [
                'course_id' => 1,
                'day' => 'Tuesday',
                'start_time' => '9:00 AM',
                'end_time' => '11:00 AM',
            ],
            [
                'course_id' => 3,
                'day' => 'Wednesday',
                'start_time' => '9:00 AM',
                'end_time' => '11:00 AM',
            ],
            [
                'course_id' => 4,
                'day' => 'Thursday',
                'start_time' => '9:00 AM',
                'end_time' => '11:00 AM',
            ],
            [
                'course_id' => 1,
                'day' => 'Thursday',
                'start_time' => '11:00 AM',
                'end_time' => '2:00 PM',
            ],
            [
                'course_id' => 3,
                'day' => 'Friday',
                'start_time' => '9:00 AM',
                'end_time' => '11:00 AM',
            ],
        ];

        CourseSchedule::insert($courseSchedules);
    }
}
