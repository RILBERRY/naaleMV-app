<div>
    <div>
        <div class="flex flex-wrap justify-between">
            <div class="flex justify-center">
                <h1 class="flex items-center text-4xl font-extrabold dark:text-white">
                    <a href="/competition-lists"
                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline text-sm pr-4">
                        <svg class="w-10 h-10 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M5 12h14M5 12l4-4m-4 4 4 4" />
                        </svg></a>

                    Generate Students
                </h1>
            </div>
            <div>
                <div class="flex gap-4 sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-end pb-4">
                    <button type="button"
                        onclick="Livewire.dispatch('openModal', { component: 'student-list-collector', arguments: { competition_id : {{ $competition->id }}  }})"
                        class="text-white flex  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="w-7 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd" />
                        </svg> <span class="">Add Students</span></button>
                    <a href="/competition/{{$competition->id}}/export"
                        class="text-white flex  bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
                        <svg class="w-7 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M9 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H7Zm8-1a1 1 0 0 1 1-1h1v-1a1 1 0 1 1 2 0v1h1a1 1 0 1 1 0 2h-1v1a1 1 0 1 1-2 0v-1h-1a1 1 0 0 1-1-1Z"
                                clip-rule="evenodd" />
                        </svg> <span class="">Export PDF</span></a>

                </div>
                <div
                    class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-end pb-4">
                    <div class="flex flex-row gap-2">
                        <label for="table-search" class="sr-only">Search</label>
                        <div class="relative">
                            <div
                                class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="table-search" wire:model.live="query"
                                class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Search for items">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm sticky text-left rtl:text-right text-gray-500 dark:text-gray-400 ">
            <thead class="text-xs sticky text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    @foreach ($competition->included_fields as $field)
                        <th scope="col" class="px-6 py-3 cursor-pointer" >
                            <div class="flex items-center">
                                {{ $availableIncludeFields[$field] }}
                                <svg class="w-3 h-3 ms-1.5 "
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path
                                        d="M8.574 11.024h6.852a2.075 2.075 0 0 0 1.847-1.086 1.9 1.9 0 0 0-.11-1.986L13.736 2.9a2.122 2.122 0 0 0-3.472 0L6.837 7.952a1.9 1.9 0 0 0-.11 1.986 2.074 2.074 0 0 0 1.847 1.086Zm6.852 1.952H8.574a2.072 2.072 0 0 0-1.847 1.087 1.9 1.9 0 0 0 .11 1.985l3.426 5.05a2.123 2.123 0 0 0 3.472 0l3.427-5.05a1.9 1.9 0 0 0 .11-1.985 2.074 2.074 0 0 0-1.846-1.087Z" />
                                </svg>
                            </div>
                        </th>
                    @endforeach
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($participatedStudents as $participatedStudent)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        @foreach ($competition->included_fields as $field)
                        {{-- {{$participatedStudent}} --}}
                            @if ($loop->index == 0)
                                <th scope="row"
                                    class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white flex flex-col">
                                    {{ $participatedStudent[$field] }}
                                </th>
                            @else
                                <td class="px-6 py-4">
                                    {{ $participatedStudent[$field] }}
                                </td>
                            @endif
                        @endforeach

                        <td class="px-6 py-4 text-right">
                            <form action="/competition/{{$competition->id}}/remove/{{$participatedStudent['id']}}">
                                @csrf
                                <button type="submit" data-modal-target="loading-modal" data-modal-toggle="loading-modal" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Remove</button>
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div class="p-2 w-full flex justify-center sm:justify-end ">
        {{ $participatedStudents->links('components.pagination') }}
        {{-- @include('components.pagination') --}}
    </div>
</div>
