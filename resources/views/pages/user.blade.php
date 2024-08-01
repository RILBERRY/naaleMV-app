@extends('main')
@section('title', 'Students')

@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Email
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Admin Approved at
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr class="bg-white dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->name}}
                </th>
                <td class="px-6 py-4">
                    {{$user->email}}

                </td>
                <td class="px-6 py-4 text-center">
                    {{$user->admin_approve_at ?? '-'}}
                </td>
                <td class="px-6 py-4 flex justify-center">
                        @if ($user->admin_approve_at)
                        <form action="/user/{{$user->id}}/revoke">
                            @csrf
                            <button type="submit" data-modal-target="loading-modal" data-modal-toggle="loading-modal" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">Revoke</button>
                        </form>
                        @else
                        <form action="/user/{{$user->id}}/approve">
                            @csrf
                            <button type="submit" data-modal-target="loading-modal" data-modal-toggle="loading-modal" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-blue-500 dark:focus:ring-blue-800">Approve</button>
                        </form>
                        @endif
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection
