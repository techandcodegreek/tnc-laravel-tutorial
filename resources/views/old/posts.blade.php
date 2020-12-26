@extends('layouts.layout')

@section('content')
    <div class="container">
        <h1>Posts!</h1>
        @foreach ($posts as $post)
            @include('includes.post')
        @endforeach
    </div>
@endsection
