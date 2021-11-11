<div>
    @if($viewStudents)
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
                                Students</h3>
                        </div>
                        <div class="flex items-center justify-center relative">
                            <input wire:model.debounce.500ms="searchVal"
                                class="border-2 border-gray-300 bg-white h-10 px-5 rounded-lg text-sm focus:outline-none"
                                type="search" placeholder="Search by last name">
                            <svg class="text-gray-600 h-4 w-4 fill-current absolute right-2"
                                xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                version="1.1" id="Capa_1" x="0px" y="0px"
                                viewBox="0 0 56.966 56.966"
                                style="enable-background:new 0 0 56.966 56.966;"
                                xml:space="preserve" width="512px"
                                height="512px">
                                <path
                                    d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                            </svg>
                        </div>
                        <div
                            class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                            <a wire:click.prevent="createStudent"
                                class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">Add Student</a>
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
                                    Student Name
                                </th>
                                <th
                                    class="px-4 bg-indigo-50 text-indigo-500 align-middle border border-solid border-indigo-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Email
                                </th>
                                <th
                                    class="px-4 bg-indigo-50 text-indigo-500 align-middle border border-solid border-indigo-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-center">
                                    Options
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($students as $student)
                            <tr>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 text-left">
                                    {{ $student->user->name }}
                                </td>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 ">
                                    {{ $student->user->email }}
                                </td>
                                <td class="pr-4">
                                    <div class="flex">
                                        <a wire:click.prevent="assignTeacher({{ $student->id }})"
                                            class="px-2 text-sm py-2 mx-auto font-medium text-green-600 transition duration-500 ease-in-out transform bg-green-100 rounded-lg hover:bg-green-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                                            Assign Teacher</a>
                                        <a wire:click="editStudent({{ $student->id }})"
                                            class="px-2 text-sm py-2 mx-auto font-medium text-blue-600 transition duration-500 ease-in-out transform bg-blue-100 rounded-lg hover:bg-blue-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                                            <i class="fas fa-edit"></i></a>
                                        <form>
                                            <button
                                                class="px-2 text-sm py-2 mx-auto font-medium text-red-600 transition duration-500 ease-in-out transform bg-red-100 rounded-lg hover:bg-red-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                                                <i
                                                    class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    @endif

    @if ($showAddStudent)
    <section class="w-4/5 m-auto mt-12">
        <div class="flex -full justify-center">
            <h3 class="font-semibold text-xl text-indigo-700">
                Add Student</h3>
        </div>
        <div class="px-12 py-16  shadow-lg bg-white lg:w-2/5 m-auto">
            <form wire:submit.prevent="storeStudent">
                {{-- <input wire:model="student.role" type="hidden" value="student"> --}}
                <div class="w-full mb-4">
                    <div class="flex flex-col justify-center">
                        <label for="">Student Name</label>
                        <input wire:model.defer="name" type='text'
                            placeholder="Enter student name..."
                            class="px-2  w-full border rounded py-2 text-gray-700 focus:outline-none items-center" />
                        @error('name')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="flex flex-wrap">
                    <label for="email"
                        class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                        {{ __('E-Mail Address') }}:
                    </label>
                
                    <input type="email"
                        class="form-input w-full @error('email') border-red-500 @enderror"
                        wire:model.defer="email" required autocomplete="email" placeholder="example@email.com">
                
                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
                
                <div class="flex flex-wrap">
                    <label for="password"
                        class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                        {{ __('Password') }}:
                    </label>
                
                    <input id="password" type="password"
                        class="form-input w-full @error('password') border-red-500 @enderror"
                        wire:model.defer="password" required
                        autocomplete="new-password" placeholder="**********">
                
                    @error('password')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>
               
                <button type="submit"
                    class="w-full mt-6 py-2 rounded bg-blue-500 text-gray-100 focus:outline-none">
                    Submit</button>
            </form>
        </div>
    </section>
    @endif

    @if ($showEditStudent)
    <section class="w-4/5 m-auto mt-12">
        <div class="flex -full justify-center">
            <h3 class="font-semibold text-xl text-indigo-700">
                Edit Student</h3>
        </div>
        <div class="px-12 py-16  shadow-lg bg-white lg:w-2/5 m-auto">
            <form wire:submit.prevent="updateStudent">
               <div class="w-full mb-4">
                    <div class="flex flex-col justify-center">
                        <label for="">Student Name</label>
                        <input wire:model.defer="name" type='text'
                            placeholder="Enter student name..."
                            class="px-2  w-full border rounded py-2 text-gray-700 focus:outline-none items-center" />
                        @error('name')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                
                <div class="flex flex-wrap">
                    <label for="email"
                        class="block text-gray-700 text-sm font-bold mb-2 sm:mb-4">
                        {{ __('E-Mail Address') }}:
                    </label>
                
                    <input type="email"
                        class="form-input w-full @error('email') border-red-500 @enderror"
                        wire:model.defer="email" required autocomplete="email"
                        placeholder="example@email.com">
                
                    @error('email')
                    <p class="text-red-500 text-xs italic mt-4">
                        {{ $message }}
                    </p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full mt-6 py-2 rounded bg-blue-500 text-gray-100 focus:outline-none">
                    Update</button>
            </form>
        </div>
    </section>
    @endif

    @if($showAssignTeacher)
    <section class="w-4/5 m-auto mt-12">
        <div class="flex -full justify-center">
            <h3 class="font-semibold text-xl text-indigo-700">
                Assign Teacher</h3>
        </div>
        <div class="px-12 py-16  shadow-lg bg-white lg:w-2/5 m-auto">
            <form wire:submit.prevent="assignSave({{ $studentId }})">
                <div class="w-full mb-4">
                    <div class="flex flex-col justify-center">
                        <span class="text-lg text-center">
                            {{ $name }}
                        </span>
                    </div>
                </div>
                <div class="w-full mb-2">
                    <div class="flex flex-col justify-center">
                        <div class="w-full mt-8 b-4">
                            <label for="">Teacher</label>
                            <select wire:model="teacherId"
                                class="w-full px-4 py-1 rounded-md  outline-gray-400 text-gray-800 bg-gray-50"
                                name="" id="">
                                <option value="">Select Teacher</option>
                                @foreach ($teachers as $teacher)
                                <option value="{{ $teacher->id }}">{{
                                    $teacher->user->name }}</option>
                                @endforeach
                            </select>
                        </div>
    
                        @error('teacherId')
                        <div class="text-red-500 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <button type="submit"
                    class="w-full mt-6 py-2 rounded bg-blue-500 text-gray-100 focus:outline-none">
                    Assign</button>
            </form>
        </div>
    </section>
    @endif
</div>
