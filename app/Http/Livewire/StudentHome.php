<?php

namespace App\Http\Livewire;

use App\Models\Student;
use Livewire\Component;

class StudentHome extends Component
{
    public function render()
    {
        // $student = Student::where('user_id', auth()->user()->id)->with('teacherStudent.teacher.courses.courseSchedules')->first();
        // dd($student);

        return view('livewire.student-home', [
            'student' => Student::where('user_id', auth()->user()->id)->with('teacherStudent.teacher.courses.courseSchedules')->first()
        ]);
    }
}
