<div>
    @if($viewTeachers)
    <section>
        {{-- <div class="py-12">
            <h1 class="bold text-3xl text-gray-800 w-4/6 m-auto">Teacher</h1>
        </div> --}}
        <div class="w-full mb-12 xl:mb-0 px-4 mx-auto mt-12">
            <div
                class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div
                            class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-indigo-700">
                                teachers</h3>
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
                            <a wire:click.prevent="createTeacher"
                                class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-2 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button">Add Teacher</a>
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
                                    Teacher Name
                                </th>
                                <th
                                    class="px-4 bg-indigo-50 text-indigo-500 align-middle border border-solid border-indigo-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Email
                                </th>
                                <th
                                    class="px-4 bg-indigo-50 text-indigo-500 align-middle border border-solid border-indigo-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                    Options
                                </th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($teachers as $teacher)
                            <tr>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 text-left">
                                    {{ $teacher->user->name }}
                                </td>
                                <td
                                    class="border-t-0 px-4 align-middle border-l-0 border-r-0 text-md whitespace-nowrap p-4 ">
                                    {{ $teacher->user->email }}
                                </td>
                                <td>
                                    <div class="flex">
                                        {{-- <a
                                            href="{{ route('subjectchoice.create', $teacher->id) }}"
                                            class="px-2 text-sm py-2 mx-auto font-medium text-indigo-600 transition duration-500 ease-in-out transform bg-indigo-100 rounded-lg hover:bg-indigo-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                                            <i class="fas fa-plus"></i>
                                            <i class="fas fa-book"></i></a> --}}
                                        {{-- <a
                                            href="{{ route('teacher.show', $teacher->id) }}"
                                            class="px-2 text-sm py-2 mx-auto font-medium text-green-600 transition duration-500 ease-in-out transform bg-green-100 rounded-lg hover:bg-green-300 focus:shadow-outline focus:outline-none focus:ring-2 ring-offset-current ring-offset-2">
                                            <i class="fas fa-eye"></i></a> --}}
                                        <a wire:click="editTeacher({{ $teacher->id }})"
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

    @if ($showAddTeacher)
    <section class="w-4/5 m-auto mt-12">
        <div class="flex -full justify-center">
            <h3 class="font-semibold text-xl text-indigo-700">
                Add Teacher</h3>
        </div>
        <div class="px-12 py-16  shadow-lg bg-white lg:w-2/5 m-auto">
            <form wire:submit.prevent="storeTeacher">
                {{-- <input wire:model="Teacher.role" type="hidden"
                    value="Teacher"> --}}
                <div class="w-full mb-4">
                    <div class="flex flex-col justify-center">
                        <label for="">Teacher Name</label>
                        <input wire:model.defer="name" type='text'
                            placeholder="Enter Teacher name..."
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

    @if ($showEditTeacher)
    <section class="w-4/5 m-auto mt-12">
        <div class="flex -full justify-center">
            <h3 class="font-semibold text-xl text-indigo-700">
                Edit Teacher</h3>
        </div>
        <div class="px-12 py-16  shadow-lg bg-white lg:w-2/5 m-auto">
            <form wire:submit.prevent="updateTeacher">
                <div class="w-full mb-4">
                    <div class="flex flex-col justify-center">
                        <label for="">Teacher Name</label>
                        <input wire:model.defer="name" type='text'
                            placeholder="Enter Teacher name..."
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
</div>