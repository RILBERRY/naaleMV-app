@extends('main')
@section('title', 'Students')

@section('content')

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Date time
                </th>
                <th scope="col" class="px-6 py-3">
                    Table
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    Changes By
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    from
                </th>
                <th scope="col" class="px-6 py-3 text-center">
                    to
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($activityLogs as $activityLog)
            <tr class="bg-white dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$activityLog->created_at}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$activityLog->table_name}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$activityLog->user->name}}
                </th>
                <td class="px-6 py-4">
                    <pre>{{ json_encode($activityLog->data_from, JSON_PRETTY_PRINT) }}</pre>
                </td>
                <td class="px-6 py-4">
                    <pre>{{ json_encode($activityLog->data_to, JSON_PRETTY_PRINT) }}</pre>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
</div>


@endsection
