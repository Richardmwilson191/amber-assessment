<?php

namespace App\Http\Livewire;

use App\Models\Teacher;
use App\Models\User;
use Livewire\Component;

class TeacherLive extends Component
{
    public $role, $email, $password, $name, $teacherUserId;
    public $viewTeachers = true;
    public $showAddTeacher = false;
    public $showEditTeacher = false;

    public function createTeacher()
    {
        $this->showAddTeacher = true;
        $this->viewTeachers = false;
    }

    public function storeTeacher()
    {
        $user = User::create([
            'role' => 'teacher',
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        Teacher::create([
            'user_id' => $user->id
        ]);

        $this->reset();
    }

    public function editTeacher($teacherId)
    {
        $this->showEditTeacher = true;
        $this->viewTeachers = false;
        $teacher = Teacher::find($teacherId);
        $this->teacherUserId = $teacher->user->id;
        $this->name = $teacher->user->name;
        $this->email = $teacher->user->email;
    }

    public function updateTeacher()
    {
        User::find($this->teacherUserId)->update([
            'name' => $this->name,
            'email' => $this->email
        ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.teacher-live', [
            'teachers' => Teacher::with('user')->get()
        ]);
    }
}
