@extends('layouts.app')

@section('content')
    <!-- Blog Start -->
    <div class="blog_main">
    	<div class="container">
    		<div class="row">
    			<div class="col-sm-12">
    				<h1 class="blog_text">Our Blog</h1>
    			</div>
    	    </div>
    	    <div class="blog_section_2">
                <div class="row">
                @foreach ($posts as $post)
                    <div class="col-sm-4">
                        <div class="section_1">
                            <div><img src="images/code.jpg" style="max-width: 100%;"></div>
                            <button type="button" class="date-bt">{{ date('d-m-Y', strtotime($post->created_at)) }}</button>
                            <p>
                                <h2>{{ $post->title }}</h2>
                                {{ $post->body }}
                            </p>
                        </div>
                    </div>
                @endforeach
                </div>
    	    </div>

       	</div>
    </div> 

    <!--blog end -->
@endsection
