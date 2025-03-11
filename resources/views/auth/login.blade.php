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

<body class="w-screen flex justify-center bg-gray-100 items-center h-screen overflow-hidden">
    <div class="w-[500px] rounded-2xl bg-white">
        <h1 class="w-full text-center text-3xl font-bold mt-3">LOGIN PAGE</h1>
        @if ($errors->any())
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                <li class="text-sm">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/login" method="POST"
            class="flex flex-col gap-3 [&_input]:w-full  [&_input]:p-3 [&_input]:rounded-full [&_input]:outline [&_input]:outline-gray-300 [&_input]:focus:bg-gray-100 [&_input]:focus:outline-green-600 p-5 capitalize">
            @csrf
            <label for="username">username</label>
            <input type="text" name="username" id="" placeholder="username" required>
            <label for="password">password</label>
            <input type="password" name="password" id="" placeholder="*****" required>
            <input type="submit" class="cursor-pointer bg-blue-500 text-white font-bold hover:bg-blue-800"
                value="LOGIN">
        </form>
    </div>
</body>

</html>