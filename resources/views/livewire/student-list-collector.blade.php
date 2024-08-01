<!-- Main modal -->
<div class="max-w-2xl mt-16">
    {{-- class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-40 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"> --}}
    <div class="relative p-4 w-full max-w-2xl max-h-full z-50">
        <!-- Modal content -->
        <div class="relative bg-white px-5 rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Add Students
                </h3>
                <button type="button" wire:click="$dispatch('closeModal')"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class=" space-y-4 pb-5 ">

                <form>
                    {{-- <div class="pt-2 mb-2 text-gray-900 dark:text-white">
                        <label class="font-semibold">Competition</label>
                    </div> --}}
                    <div class="pt-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <div class="flex gap-4 ">
                            <input type="text" wire:model="query"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Competition Name " />
                            <button type="button" wire:click="getStudents"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
                            <button type="button" wire:click="addSelectedStudents"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Add</button>
                        </div>
                        <div class="text-red-400 font-normal text-xs">
                            @error('competition.name')
                                This Field is required
                            @enderror
                        </div>
                    </div>
                    @if ($students)
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead
                                class="text-xs text-gray-700 uppercae bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="p-4">
                                        <div class="flex items-center">
                                            <input id="checkbox-all-search" type="checkbox" wire:model.live="selectAll"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Product name
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Color
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Category
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Accessories
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                <tr
                                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <td class="w-4 p-4" >
                                        <div class="flex items-center">
                                            <input id="checkbox-table-search-{{$student->id}}" type="checkbox"  wire:model.live="selectedIdArray" value="{{ $student->id }}"
                                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                            <label  class="sr-only">checkbox</label>
                                        </div>
                                    </td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$student->name}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$student->nid}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$student->index}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$student->dob}}
                                    </td>

                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    @else
                    <h1 class="text-xs text-gray-700 uppercae bg-gray-50 dark:bg-gray-700 dark:text-gray-400">Search for student by name , birth year, ID number</h1>
                    @endif


                </form>

            </div>
        </div>
    </div>
</div>
