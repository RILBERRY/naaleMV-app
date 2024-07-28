@extends('main')
@section('title', 'Categories')
@section('content')

<form class="max-w-md mx-auto mb-4 ">
   <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
   <div class="relative">
       <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
           <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
           </svg>
       </div>
       <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Trips..." required />
       <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
   </div>
</form>

<div class="flex flex-wrap gap-4 justify-center">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Trip
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Start Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Depature Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        End Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Number of packages
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Total Nalle
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        L.Isdhoo -> K.Male'
                    </th>
                    <td class="px-6 py-4">
                        06 July 20204
                    </td>
                    <td class="px-6 py-4">
                        10 July 20204
                    </td>
                    <td class="px-6 py-4">
                        13 July 2024
                    </td>
                    <td class="px-6 py-4">
                       130 Packages
                    </td>
                    <td class="px-6 py-4">
                        MVR 12,300
                    </td>

                </tr>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        K.Male' -> L.Isdhoo
                    </th>
                    <td class="px-6 py-4">
                        14 July 20204
                    </td>
                    <td class="px-6 py-4">
                        20 July 20204
                    </td>
                    <td class="px-6 py-4">
                        23 July 2024
                    </td>
                    <td class="px-6 py-4">
                       130 Packages
                    </td>
                    <td class="px-6 py-4">
                        MVR 12,300
                    </td>

                </tr>
            </tbody>
        </table>
    </div>

</div>
<div class="flex justify-center mt-5">
   @include('components.pagination')
</div>
@endsection



