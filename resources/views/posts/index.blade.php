@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <h2 class="text-3xl font-bold text-center mb-6">All Posts</h2>

    @foreach ($posts as $post)
    <div class="bg-white p-6 rounded-lg shadow-md mb-4">
        <div class="flex items-center mb-2">
            <span class="font-semibold">{{ $post->author->name }}</span>

            @if ($post->author->role === 'admin')
            <div class="ml-2 w-5 h-5 bg-yellow-400 clip-star"></div>
            @endif
        </div>
        <h3 class="text-xl font-bold">{{ $post->title }}</h3>
        <p class="text-gray-700">{{ $post->content }}</p>
        <span class="text-sm text-gray-500">{{ $post->created_at->format('M d, Y') }}</span>
    </div>
    @endforeach
</div>

<style>
    .clip-star {
        clip-path: polygon(50% 0%, 61% 35%, 98% 35%, 68% 57%,
                79% 91%, 50% 70%, 21% 91%, 32% 57%,
                2% 35%, 39% 35%);
    }
</style>
@endsection