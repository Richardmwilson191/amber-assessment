<div>
    <section>
        {{-- <div class="py-12">
            <h1 class="bold text-3xl text-gray-800 w-4/6 m-auto">Student</h1>
        </div> --}}
        <div class="w-full mb-12 xl:mb-0 px-4 mx-auto mt-12">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 pb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div
                            class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-indigo-700">
                                Class schedule</h3>
                        </div>
                    </div>
                </div>

                <div class="flex">
                    @forelse ($student->teacherStudent as $teacherStudent)
                    
                    @forelse ($teacherStudent->teacher->courses as $course)
                    <div class="w-1/4 mx-4">
                        <div class="shadow-md rounded-md overflow-hidden text-center w-full h-full bg-indigo-50">
                            <div class="py-3 px-5 bg-indigo-500 text-white">{{ $teacherStudent->teacher->user->name }}</div>
                            <div class="">
                                <h5 class="text-xl py-3 font-semibold mb-2 bg-indigo-200">{{ $course->course_nm }}</h5>
                                @forelse ($course->courseSchedules as $schedule)
                                    <div class="bg-indigo-200">
                                        <p class="mb-2 px-4 text-left">
                                            <span class="font-semibold text-gray-700">Day:</span> {{ $schedule->day }}
                                        </p>
                                        <p class="mb-2 px-4 text-left">
                                            <span class="font-semibold text-gray-700">Start Time:</span> {{ $schedule->start_time }}
                                        </p>
                                        <p class="mb-2 px-4 text-left">
                                            <span class="font-semibold text-gray-700">End Time:</span> {{ $schedule->end_time }}
                                        </p>
                                    </div>
                                @empty
                                    <h5 class="text-xl py-3 font-semibold mb-2 bg-indigo-200">There are no classes scheduled for this course</h5>
                                @endforelse
                            </div>
                        </div>
                    </div>
                        @empty
                            <h5 class="text-xl py-3 font-semibold mb-2 bg-indigo-200">This Teacher has not been assigned any courses</h5>
                        @endforelse
                    @empty
                        <h5 class="text-xl py-3 font-semibold mb-2 bg-indigo-200">You have not been assigned to any teacher</h5>
                    @endforelse
                </div>
            </div>
        </div>
    </section>
</div>