<!-- Main modal -->
<div class="max-w-2xl mt-16">
    {{-- class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-40 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"> --}}
    <div class="relative p-4 w-full max-w-2xl max-h-full z-50">
        <!-- Modal content -->
        <div class="relative bg-white px-5 rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                    Create Competition
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
            <div class=" space-y-4 ">

                <form>
                    {{-- <div class="pt-2 mb-2 text-gray-900 dark:text-white">
                        <label class="font-semibold">Competition</label>
                    </div> --}}
                    <div class="pt-5">
                        <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                        <input type="text" wire:model="competition.name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Competition Name " />
                        <div class="text-red-400 font-normal text-xs">
                            @error('competition.name')
                                This Field is required
                            @enderror
                        </div>
                    </div>

                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Fields to be included</label>
                    <ul
                        class="items-center w-full flex flex-wrap flex-row text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        @foreach ($availableIncludeFields as $key => $includedField)
                        <li class="w-1/3 border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center ps-3">
                                <input id="include-field-{{$key}}" type="checkbox" wire:model.live="competition.included_fields" value="{{$key}}"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="include-field-{{$key}}"
                                    class="w-full py-3 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">{{$includedField}}</label>
                            </div>
                        </li>
                        @endforeach

                    </ul>


                    <div
                        class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="button" wire:click="{{ $competition['id'] ? 'update ' : 'create' }}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ $competition['id'] ? 'Update' : 'Create' }}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
