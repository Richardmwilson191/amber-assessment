@extends('layouts.app')

@section('content')
<main class="sm:container sm:mx-auto sm:mt-10">
    <div class="w-full sm:px-6">

        @if (session('status'))
            <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if (auth()->user()->role === 'teacher')
            <livewire:teacher-home />    
        @endif
        
        @if (auth()->user()->role === 'student')
            <livewire:student-home />    
        @endif

        @if (auth()->user()->role === 'admin')
            <div class="text-2xl text-center">Welcome Admin User, <span class="text-indigo-500">{{ auth()->user()->name }}</span></div>   
        @endif   
    </div>
</main>
@endsection
