<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\CourseSchedule;
use Livewire\Component;

class CourseScheduleLive extends Component
{
    public $viewSchedule = true;
    public $showAddSchedule = false;
    public $showEditSchedule = false;
    public $courseId, $day, $startTime, $endTime, $courses, $scheduleId;

    public function cancel()
    {
        $this->reset();
    }

    public function createSchedule()
    {
        $this->viewSchedule = false;
        $this->showAddSchedule = true;
        $this->courses = Course::all();
    }

    public function storeSchedule()
    {
        CourseSchedule::create([
            'course_id' => $this->courseId,
            'day' => $this->day,
            'start_time' => $this->startTime,
            'end_time' => $this->endTime,
        ]);

        $this->reset();
    }

    public function editSchedule($scheduleId)
    {
        $this->showEditSchedule = true;
        $this->viewSchedule = false;
        $this->courses = Course::all();
        $schedule = CourseSchedule::find($scheduleId);
        $this->scheduleId = $scheduleId;
        $this->day = $schedule->day;
        $this->startTime = $schedule->start_time;
        $this->endTime = $schedule->end_time;
        $this->courseId = $schedule->course_id;
    }

    public function updateSchedule()
    {
        CourseSchedule::find($this->scheduleId)->update([
            'course_id' => $this->courseId,
            'day' => $this->day,
            'start_time' => $this->startTime,
            'end_time' => $this->endTime,
        ]);
        $this->showEditSchedule = false;
        $this->viewSchedule = true;
    }


    public function render()
    {
        return view('livewire.course-schedule-live', [
            'schedules' => CourseSchedule::with('course')->get()
        ]);
    }
}
