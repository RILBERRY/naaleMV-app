<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css','resources/js/app.js'])
    <title>@yield('title')</title>
    @livewireStyles
</head>
<body class="bg-gray-200 dark:bg-gray-600">
    @include('topNav')
    {{-- @if($agent->isMobile())
        @include('mobileNav')
    @else --}}
        @include('mainNav')
    {{-- @endif --}}

    <div class="p-4 sm:ml-64 mt-20">
        @yield('content')
    </div>

    @livewireScripts
</body>
</html>
