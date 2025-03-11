@extends('layout')

@section('content')
<div class="max-w-lg mx-auto bg-white p-6 rounded-lg shadow-md mt-10">
    <h2 class="text-2xl font-bold text-center mb-6">Create a Post</h2>

    @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="title" class="block font-semibold">Title</label>
            <input type="text" id="title" name="title" class="w-full border p-2 rounded" required>
        </div>

        <div class="mb-4">
            <label for="content" class="block font-semibold">Content</label>
            <textarea id="content" name="content" class="w-full border p-2 rounded h-32" required></textarea>
        </div>

        <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
            Submit Post
        </button>
    </form>
</div>
@endsection