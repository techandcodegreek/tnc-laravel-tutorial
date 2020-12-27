@extends('layouts.app')

@section('content')
<div class="blog_main">
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        @if (Auth::check() && Auth::user()->id == $post->user->id)
            <a href="{{ route('post.edit', $post)}}"><button class="btn btn-primary">Edit post</button></a>
            <a href="{{ route('post.delete', $post)}}"><button class="btn btn-danger">Delete post</button></a>
        @endif
    </div>
</div>
@endsection
