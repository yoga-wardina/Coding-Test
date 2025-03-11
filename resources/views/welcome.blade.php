<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-100 relative">
    <div id="sidebar" class="w-[240px] p-5 h-screen bg-white">
        <p class="text-2xl font-bold">LOGO</p>
    </div>
    <div id="header" class="w-[calc(100vw-240px)] h-[64px] bg-white fixed top-0 z-10 right-0"></div>
</body>

</html>