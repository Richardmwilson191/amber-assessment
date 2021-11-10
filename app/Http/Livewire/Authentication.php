<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Authentication extends Component
{
    public $showUserLogin = true;
    public $showRegistration = false;
    public $email, $password, $name;

    public function toggleLogin()
    {
        $this->showUserLogin = !$this->showUserLogin;
    }

    public function toggleRegistration()
    {
        $this->showRegistration = !$this->showRegistration;
    }

    public function login()
    {
        $this->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            if (auth()->user()->role === 'admin') {
                return redirect()->intended('course');
            }
            if (auth()->user()->role === 'teacher') {
                return redirect()->intended('teacher.home');
            }
            if (auth()->user()->role === 'student') {
                return redirect()->intended('student.home');
            }
        }
    }

    public function logout()
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }

    public function register()
    {
        $validated = $this->validate([
            'name' => 'required|string',
            'email' => ['required', 'string', 'email'],
            'password' => 'required|string',
        ]);

        $this->password = Hash::make($this->password);
        User::create([
            'role' => 'student',
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password
        ]);

        session()->flash('message', 'Your register successfully Go to the login page.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.authentication');
    }
}
