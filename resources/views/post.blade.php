@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->body }}</p>
        <a href="{{ route('post.edit', $post)}}"><button class="btn btn-primary">Edit post</button></a>
        <a href="{{ route('post.delete', $post)}}"><button class="btn btn-danger">Delete post</button></a>
    </div>
@endsection
