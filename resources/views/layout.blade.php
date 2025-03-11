<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-100 relative">
    <div id="sidebar" class="w-[240px] fixed top-0 p-5 h-screen bg-white">
        <p class="text-2xl font-bold"><a href="/dashboard">LOGO</a></p>
        <div
            class="mt-5 flex flex-col gap-3 [&_a]:w-full  [&_a]:hover:bg-gray-100  [&_a]:p-2  [&_a]:hover:text-blue-500 ">
            @auth
            <a href="create-account">Buat Akun</a>
            @endauth
            <a href="/posts/create">Buat Post</a>
            <a href="/posts/list">List Post</a>
        </div>
    </div>
    <div id="header"
        class="w-[calc(100vw-240px)] h-[64px] bg-white fixed top-0 z-10 right-0 flex justify-end items-center p-3">
        <div class="bg-gray-300 rounded-full w-12 h-12"></div>
    </div>
    <div class="ml-[240px] mt-[64px] p-3">@yield('content')</div>
</body>

</html>