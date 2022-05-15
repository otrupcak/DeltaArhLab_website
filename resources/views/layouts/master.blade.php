<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@isset($title){{ $title." - "}}@endisset{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="relative bg-gray-200 min-h-[300vh]">
    <x-header secret={{$secret}}>
    </x-header>

    <main class="grid grid-cols-12 gap-0 px-5 py-16">
        {{$content}}
    </main>

    <footer class="absolute grid grid-cols-4 inset-x-0 bottom-0 bg-gray-200 h-fit shadow-neu1">
        <p class="block col-start-2 col-span-2 justify-self-center self-end pb-3 mt-3 cursor-default">&#169; Delta Arh Lab <script>document.write(/\d{4}/.exec(Date())[0])</script> <span class="hover:text-red-500 cursor-none" title="Hey, thansk for stopping by! It really means a lot!">&#9829;</span></p>
    </footer>

    <x-social-sidebar>
    </x-social-sidebar>
</body>
</html>
