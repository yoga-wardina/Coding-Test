@extends('layout')

@section('content')
<div class="w-full bg-white p-6 rounded-lg shadow-md">
    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li class="text-sm">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <h2 class="text-2xl font-bold mb-4">Buat Akun baru</h2>
    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="username" class="block font-semibold">Username</label>
            <input type="text" id="username" name="username" class="w-full border p-2 rounded"
                value="{{ old('username') }}" required>
        </div>

        <div class="mb-4">
            <label for="password" class="block font-semibold">Password</label>
            <input type="password" id="password" name="password" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="name" class="block font-semibold">Name</label>
            <input type="text" id="name" name="name" class="w-full border p-2 rounded" value="{{ old('name') }}"
                required>
        </div>

        <div class="mb-4">
            <label for="role" class="block font-semibold">Role</label>
            <select id="role" name="role" class="w-full border p-2 rounded">
                <option value="admin">Admin</option>
                <option value="author">Author</option>
            </select>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">Create
            Account</button>
    </form>
    <p class="text-gray-700"></p>
</div>
@endsection