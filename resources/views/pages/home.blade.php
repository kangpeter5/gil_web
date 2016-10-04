@extends('main')

@section('title','| Home')

@section('content')
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  	<!-- Wrapper -->
	    <div class="carousel-inner" role="slideMenu" >
	    	<div class="item active">
				<img src="http://imgur.com/84rNYrJ.jpg" class="fill img-responsive center-block" alt="...">
	        </div>
	        <div class="item">
				<img src="http://imgur.com/Nv57N8r.jpg" class="fill img-responsive center-block" alt="...">
	        </div>
	        <div class="item">
	        	<img src="http://imgur.com/aPHCvJc.jpg" class="fill img-responsive center-block" alt="...">
	        </div>
	        <div class="item">
				<img src="http://imgur.com/4MS1Ren.jpg" class="fill img-responsive center-block" alt="...">
	        </div>
	        <div class="item">
				<img src="http://imgur.com/LM9Ub2A.jpg" class="fill img-responsive center-block" alt="...">
	        </div>
	        <div class="item">
				<img src="http://imgur.com/gtL4VSF.jpg" class="fill img-responsive center-block" alt="...">
	        </div>
	    </div>
	    <!-- Controls -->
	    <div class="img-responsive">
		<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
	  	</a>
		<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		</a>
		</div>
	</div>

 {{-- blog not working yet --}}
   	<div class="text-center col-lg-12 fill" id="content-blog">
   		<a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg">Create Post</a>

	    @foreach ($posts as $post)
	    <img src="">
    	<h1>{{ $post->title }}</h1>
    	<h5>{{ date('M j, Y g:ia', strtotime($post->created_at)) }}</h5>
    		{{-- {!! Html::linkRoute('posts.edit', 'edit', array($post->id), array('class'=> 'btn btn-warning')) !!} --}}
    		<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a>
			{{-- {!! Html::linkRoute('posts.destroy', 'delete" aria-hidden="true"></span>', array($post->id), array('class'=> 'btn btn-danger')) !!} --}}
			<a href="{{ route('posts.destroy', $post->id) }}" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
		{{-- <img src="{{ $post->piclink }}"> --}}
    	<div class="col-lg-12 well">
    		<p class="lead">
    			{{-- words per minute is useless tool unless you're a security expert... even then most of the coding is done before hand(preventative) --}}{{ $post->body }}
    		</p>
    	</div>
		<hr>
	    @endforeach
   	</div>
   	<br>
   	
@endsection