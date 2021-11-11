<div>
    @if($viewTeacherSchedule)
    <section>
        {{-- <div class="py-12">
            <h1 class="bold text-3xl text-gray-800 w-4/6 m-auto">Student</h1>
        </div> --}}
        <div class="w-full mb-12 xl:mb-0 px-4 mx-auto mt-12">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div
                            class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-indigo-700">
                                {{ $teacher->user->name }} course schedule</h3>
                        </div>
                    </div>
                </div>
    
                <div class="block w-full overflow-x-auto">
                    <table
                        class="items-center bg-transparent w-full border-collapse ">
                        <thead>
                            <tr>
                                <th
                                    class="px-4 bg-indigo-50 text-indigo-500 align-middle border border-solid border-indigo-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Day
                                </th>
                                <th
                                    class="px-4 bg-indigo-50 text-indigo-500 align-middle border border-solid border-indigo-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Start Time
                                </th>
                                <th
                                    class="px-4 bg-indigo-50 text-indigo-500 align-middle border border-solid border-indigo-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    End Time
                                </th>
                            </tr>
                        </thead>
    
                        <tbody>
                            @forelse ($teacher->courses as $course)
                            <tr>
                                <td colspan="3"
                                    class="border-t-0 px-4 bg-gray-300 text-center text-lg font-semibold align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                    Course - {{ $course->course_nm }}
                                </td>
                            </tr>
                                @forelse ($course->courseSchedules as $schedule)
                                <tr>

                                    <td
                                        class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 ">
                                        {{ $schedule->day }}
                                    </td>
                                    <td
                                        class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 ">
                                        {{ $schedule->start_time }}
                                    </td>
                                    <td
                                        class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 ">
                                        {{ $schedule->end_time }}
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td colspan="3"
                                            class="border-t-0 px-4 text-center align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                            No classes Scheduled for this course
                                        </td>
                                    </tr>
                                @endforelse
                            @empty
                                <tr>
                                    <td colspan="3"
                                        class="border-t-0 px-4 text-center align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4">
                                        No Courses Assigned
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>
