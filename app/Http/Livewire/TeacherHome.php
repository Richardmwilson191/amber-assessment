<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use Livewire\Component;

class TeacherHome extends Component
{
    public $viewTeacherSchedule = true;



    public function render()
    {
        return view('livewire.teacher-home', [
            'teacher' => Teacher::where('user_id', auth()->user()->id)->with('courses', 'courses.courseSchedules')->first()
        ]);
    }
}
