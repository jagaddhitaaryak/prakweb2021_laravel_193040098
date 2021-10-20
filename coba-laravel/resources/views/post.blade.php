@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>

    <p>By: <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
        {{-- <h5>{{ $post["author"] }}</</h5> --}}
        {!! $post->body !!} 
        {{-- tanda seru diatas untuk membuat paragraf --}}

    <a href="/blog" class="d-block mt-3">Back to Posts</a>
@endsection