<?php

namespace App\Http\Livewire;

use App\Models\Course;
use App\Models\CourseTeacher;
use App\Models\Teacher;
use Livewire\Component;

class CourseLive extends Component
{
    public $course, $courseId, $teachers, $teacherId;
    public $viewCourse = true;
    public $showAddCourse = false;
    public $showEditCourse = false;
    public $showAssignTeacher = false;

    protected $rules = [
        'course.course_nm' => 'required',
        'course.cost' => 'required'
    ];

    public function mount()
    {
        $this->course = new Course();
    }

    public function createCourse()
    {
        $this->showAddCourse = true;
        $this->viewCourse = false;
    }

    public function storeCourse()
    {
        $this->validate();
        $this->course->save();
    }

    public function editCourse($courseId)
    {
        $this->showEditCourse = true;
        $this->viewCourse = false;
        $course = Course::find($courseId);
        $this->courseId = $courseId;
        $this->course->course_nm = $course->course_nm;
        $this->course->cost = $course->cost;
    }

    public function updateCourse()
    {
        Course::find($this->courseId)->update([
            'course_nm' => $this->course->course_nm,
            'cost' => $this->course->cost
        ]);
        $this->showEditCourse = false;
        $this->viewCourse = true;
    }

    public function assignTeacher($courseId)
    {
        $this->course = Course::find($courseId);
        $this->viewCourse = false;
        $this->showAssignTeacher = true;
        $this->teachers = Teacher::with('user')->get();
    }

    public function assign($courseId)
    {
        Course::updateOrCreate(
            [
                'id' => $courseId,
            ],
            [
                'teacher_id' => $this->teacherId
            ]
        );

        $this->reset();
    }

    public function render()
    {
        return view('livewire.course-live', [
            'courses' => Course::all()
        ]);
    }
}
