<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">
           <a href="{{ route('post', $post) }}">{{ $post->title }}</a>
        </h5>
        <p class="card-text">{{ $post->body }}</p>
        {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}
    </div>
</div>