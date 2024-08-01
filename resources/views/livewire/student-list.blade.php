<div>
    <div>
        <div class="flex flex-wrap justify-between">
            <div class="flex justify-center">
                <h1 class="flex items-center text-4xl font-extrabold dark:text-white">Students</h1>
            </div>
            <div>
                <div class="flex  sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-end pb-4">
                    <button type="button" onclick="Livewire.dispatch('openModal', { component: 'create-update-student' })"
                        class="text-white flex  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="w-7 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd" />
                        </svg> <span class="">New Student</span></button>
                    <button type="button" onclick="Livewire.dispatch('openModal', { component: 'student-csv-uploader' })"
                        class="text-white flex  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="w-7 h-5 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M12 3a1 1 0 0 1 .78.375l4 5a1 1 0 1 1-1.56 1.25L13 6.85V14a1 1 0 1 1-2 0V6.85L8.78 9.626a1 1 0 1 1-1.56-1.25l4-5A1 1 0 0 1 12 3ZM9 14v-1H5a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2h-4v1a3 3 0 1 1-6 0Zm8 2a1 1 0 1 0 0 2h.01a1 1 0 1 0 0-2H17Z" clip-rule="evenodd"/>
                          </svg>
                        <span class="">Upload Student list</span></button>
                    {{-- @include('components.create-update-students-modal') --}}
                </div>
                <div
                    class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-end pb-4">
                    <div class="flex flex-row gap-2">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search" wire:model.live="query"
                                class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items">
                        </div>
                        {{-- <button data-drawer-target="drawer-right-example" data-drawer-show="drawer-right-example"
                            data-drawer-placement="right" aria-controls="drawer-right-example">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                    d="M18.796 4H5.204a1 1 0 0 0-.753 1.659l5.302 6.058a1 1 0 0 1 .247.659v4.874a.5.5 0 0 0 .2.4l3 2.25a.5.5 0 0 0 .8-.4v-7.124a1 1 0 0 1 .247-.659l5.302-6.059c.566-.646.106-1.658-.753-1.658Z" />
                            </svg>
                        </button> --}}
                    </div>
                    {{-- @include('components.filter-modal') --}}
                </div>
            </div>
        </div>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm sticky text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs sticky text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="sortBy('name')" >
                        <div class="flex items-center">
                            Student Name
                            <svg class="w-3 h-3 ms-1.5 {{$sortField == "name"? $sortType == 'desc'? 'text-red-500' :'text-blue-700': ''}}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                              </svg>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Address
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="sortBy('nid')">
                        <div class="flex items-center">
                            NID
                            <svg class="w-3 h-3 ms-1.5 {{$sortField == "nid"? $sortType == 'desc'? 'text-red-500' :'text-blue-700': ''}}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                              </svg>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3 cursor-pointer" wire:click="sortBy('grade_id')">
                        <div class="flex items-center">
                            Grade
                            <svg class="w-3 h-3 ms-1.5 {{$sortField == "grade_id"? $sortType == 'desc'? 'text-red-500' :'text-blue-700': ''}}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                              </svg>
                        </div>
                    </th>
                    {{-- <th scope="col" class="px-6 py-3 ">
                        <div class="flex items-center">
                            Class
                        </div>
                    </th> --}}
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Student Index
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Parent or Gurdian
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center">
                            Contact
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <div class="flex items-center cursor-pointer" wire:click="sortBy('dob')">
                            Date of birth
                            <svg class="w-3 h-3 ms-1.5 {{$sortField == "dob"? $sortType == 'desc'? 'text-red-500' :'text-blue-700': ''}}" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z"/>
                              </svg>
                        </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex flex-col">
                        {{ $student->name }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $student->address }},
                        {{ $student->island }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $student->nid }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $student->grade? $student->grade->name : "-"  }}
                    </td>
                    {{-- <td class="px-6 py-4">
                        {{ $student->class? $student->class : "-"  }}
                    </td> --}}
                    <td class="px-6 py-4">
                        {{ $student->index? $student->index : "-"  }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $student->gurdian_name? $student->gurdian_name : "-"  }}
                        {{-- <br>
                    <span class="text-gray-500">978##38</span> --}}
                    </td>
                    <td class="px-6 py-4">
                        {{ $student->gurdian_contact? $student->gurdian_contact : "-"  }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $student->dob? $student->dob : "-"  }}

                    </td>
                    <td class="px-6 py-4 text-right">
                        <button onclick="Livewire.dispatch('openModal', { component: 'create-update-student', arguments: { student_id : {{ $student->id }}  }})" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="p-2 w-full flex justify-center sm:justify-end ">
        {{$students->links('components.pagination')}}
        {{-- @include('components.pagination') --}}
    </div>
</div>
