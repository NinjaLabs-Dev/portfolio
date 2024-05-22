<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | NinjaLabs</title>

    <meta name="description" content="Creating advanced, modern and bespoke web design and software to power the world of real-time data.">
    <meta name="keywords" content="web design, software development, real-time data, bespoke software, modern web design, advanced web design">
    <meta name="author" content="NinjaLabs">
    <meta name="og:image" content="{{ asset('logos/NLMain.png') }}">
    <meta name="og:title" content="@yield('title') | NinjaLabs">
    <meta name="og:description" content="Creating advanced, modern and bespoke web design and software to power the world of real-time data.">
    <meta name="og:url" content="{{ url()->current() }}">
    <meta name="og:site_name" content="NinjaLabs">
    <meta name="og:type" content="website">
    <meta name="og:locale" content="en_GB">
    <meta name="og:locale:alternate" content="en_US">
    <meta name="theme-color" content="#FFFFFF">

    <link rel="icon" href="{{ asset('logos/NLMain.png') }}" type="image/png">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="content-container 2xl:p-4">
        <div class="noise-container">
            <div class="noise"></div>
        </div>

        <div class="inner-container">
            <div class="outer-border"></div>
            <div class="content flex-col flex xl:p-4 xl:m-4">
                <div class="noise-container">
                    <div class="noise"></div>
                </div>
                <div class="flex justify-center items-center my-4 xl:m-0">
                    <x-navbar></x-navbar>
                </div>

                <main class="inner-wrapper @hasSection('flex-wrapper')flex flex-grow @endif">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>
</html>
