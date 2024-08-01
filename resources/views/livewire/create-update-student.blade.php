<!-- Main modal -->
<div class="max-w-2xl mt-16">
    {{-- class="overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-40 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full"> --}}
 <div class="relative p-4 w-full max-w-2xl max-h-full z-50">
        <!-- Modal content -->
        <div class="relative bg-white px-5 rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   {{ $student['id']? 'Update Student Info ': 'Add New Student Info'}}
                </h3>
                <button type="button" wire:click="$dispatch('closeModal')"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-hide="create-update-student-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class=" space-y-4">

                <form>
                    <div class="pt-2 mb-2 text-gray-900 dark:text-white">
                        <label class="font-semibold">Student Info</label>
                    </div>
                    <div class="grid gap-6 mb-6 md:grid-cols-2">
                        <div>
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                            <input type="text" wire:model="student.name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Student full name "  />
                                <div class="text-red-400 font-normal text-xs" >@error('student.name') This Field is required @enderror</div>
                        </div>
                        <div>
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">National ID</label>
                            <input type="text" wire:model="student.nid"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Student National ID "  />
                                <div class="text-red-400 font-normal text-xs" >@error('student.nid') This Field is required @enderror</div>

                        </div>
                        <div>
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                            <input type="text" wire:model="student.address"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Address"  />
                                <div class="text-red-400 font-normal text-xs" >@error('student.address') This Field is required @enderror</div>

                        </div>
                        <div>
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Island</label>
                            <input type="text" wire:model="student.island"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="island"  />
                                <div class="text-red-400 font-normal text-xs" >@error('student.island') This Field is required @enderror</div>

                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of
                                Birth</label>
                            <input type="date" wire:model="student.dob"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                 />
                                <div class="text-red-400 font-normal text-xs" >@error('student.dob') This Field is required @enderror</div>

                        </div>
                        <div>
                            <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age At
                                join</label>
                            <input type="text" wire:model="student.age_at_feb"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Age at february"  />
                                <div class="text-red-400 font-normal text-xs" >@error('student.age_at_feb') This Field is required @enderror</div>

                        </div>
                        <div>
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gurdian Name</label>
                            <input type="text" wire:model="student.gurdian_name"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Gurdian Name"  />
                                <div class="text-red-400 font-normal text-xs" >@error('student.gurdian_name') This Field is required @enderror</div>

                        </div>
                        <div>
                            <label
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gurdian Contact</label>
                            <input type="number" wire:model="student.gurdian_contact"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="Gurdian Contact"   />
                                <div class="text-red-400 font-normal text-xs" >@error('student.gurdian_contact') This Field is required @enderror</div>

                        </div>

                    </div>
                    <div class="pt-2 mb-2  border-t border-gray-200 rounded-b dark:border-gray-600">
                        <label class="font-semibold text-gray-900 dark:text-white">Class Details</label>
                    </div>
                    <div class="mb-6">
                        <label  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Index
                            Number</label>
                        <input type="email" wire:model="student.index"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="index number" />
                    </div>
                    <div class="mb-6">
                        <label
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Grade</label>
                        <select id="countries" wire:model="student.grade_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a grade</option>
                            @foreach ($teachingGrades as $grade)
                            <option value="{{$grade->id}}">{{$grade->name}}</option>

                            @endforeach
                        </select>
                    </div>
                    <div class="mb-6">
                        <label
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class</label>
                        <select id="countries" wire:model="student.class"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                            <option selected>Choose a Class</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                    {{-- <div class="mb-6">
                        <label
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Class</label>
                        <input type="text" oninput="this.value = this.value.toUpperCase()" id="class"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="Student Class (eg: A, B)"  />
                    </div> --}}

                    <div class="flex justify-end items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                        <button type="button" wire:click="{{ $student['id']? 'update ': 'create'}}"
                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{ $student['id']? 'Update': 'Create'}}</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
