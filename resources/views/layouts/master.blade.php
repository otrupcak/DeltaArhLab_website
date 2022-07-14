<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <title>@isset($title){{ $title." - "}}@endisset{{config('app.name')}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body class="relative flex flex-col bg-gray-200 min-h-screen selection:text-white">

    <x-header secret={{$secret}}>
    </x-header>

    <main id="main" class="grow px-4 py-3 lg:px-7 lg:py-8">
        {{$content}}
    </main>

    <footer class="grid grid-cols-4 inset-x-0 mt-4 min-h-max bg-gray-200 shadow-neu1">
        <p class="hidden lg:block col-start-2 col-span-2 justify-self-center self-end pb-3 mt-3 cursor-default"> Delta Arh Lab &#169; <script>document.write(/\d{4}/.exec(Date())[0])</script> <span class="hover:text-red-500 cursor-none" title="Hey, thanks for stopping by! It really means a lot!">&#9829;</span></p>
        <p class="lg:hidden col-start-1 col-span-full justify-self-center self-end pb-3 mt-3 cursor-default text-sm text-gray-400">Hey, thanks for stopping by! It really means a lot!</span></p>
    </footer>

    @if (Request::segment(1) != "contact-us")
    <x-social-sidebar>
    </x-social-sidebar>
    @endif
</body>
</html>
