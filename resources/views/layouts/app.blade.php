<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    @livewireStyles
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
    <div id="app">
        <header class="bg-blue-900 py-6">
            <div class="container mx-auto flex justify-between items-center px-6">
                <div>
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <nav class="space-x-4 text-gray-300 text-sm sm:text-base">
                    @guest
                        <a class="no-underline hover:underline" href="{{ route('authenticate') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                        {{-- <a class="no-underline hover:underline" href="{{ route('authenticate') }}">{{ __('Register') }}</a> --}}
                        @endif
                        @else
                       
                    @endguest
                    @auth   
                        <span class="bg-gray-300 rounded text-indigo-700">{{ Auth::user()->name }}</span>
                        @if (auth()->user()->role === 'teacher')
                            <a class="no-underline hover:underline" href="{{ route('home') }}">{{
                                __('Home') }}</a>
                        @endif
                        
                        @if (auth()->user()->role === 'admin')
                            <a class="no-underline hover:underline" href="{{ route('course.index') }}">{{
                                __('Courses') }}</a>
                            <a class="no-underline hover:underline" href="{{ route('student.index') }}">{{
                                __('Students') }}</a>
                            <a class="no-underline hover:underline" href="{{ route('teacher.index') }}">{{
                                __('Teachers') }}</a>
                            <a class="no-underline hover:underline" href="{{ route('course.schedule') }}">{{
                                __('Course Schedules') }}</a>
                        @endif
                        <a href="{{ route('logout') }}" class="no-underline hover:underline"
                            onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                            class="hidden">
                            {{ csrf_field() }}
                        </form>
                    @endauth
                </nav>
            </div>
        </header>

        @yield('content')
        @livewireScripts
    </div>
</body>
</html>
