<?php

namespace App\Http\Livewire;

use App\Models\Student;
use App\Models\User;
use Livewire\Component;

class StudentLive extends Component
{
    public $role, $email, $password, $name, $studentUserId;
    public $viewStudents = true;
    public $showAddStudent = false;
    public $showEditStudent = false;

    public function createStudent()
    {
        $this->showAddStudent = true;
        $this->viewStudents = false;
    }

    public function storeStudent()
    {
        $user = User::create([
            'role' => 'student',
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);

        Student::create([
            'user_id' => $user->id
        ]);

        $this->reset();
    }

    public function editStudent($studentId)
    {
        $this->showEditStudent = true;
        $this->viewStudents = false;
        $student = Student::find($studentId);
        $this->studentUserId = $student->user->id;
        $this->name = $student->user->name;
        $this->email = $student->user->email;
    }

    public function updateStudent()
    {
        User::find($this->studentUserId)->update([
            'name' => $this->name,
            'email' => $this->email
        ]);
        $this->reset();
    }

    public function render()
    {
        return view('livewire.student-live', [
            'students' => Student::with('user')->get(),
        ]);
    }
}
