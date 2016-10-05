@extends('main')

@section('title','| Home')

@section('content')
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  	<!-- Wrapper -->
	    <div class="carousel-inner" role="slideMenu" >
	    	<div class="item active">
				<img src="http://imgur.com/ZK7OckT.jpg" class="fill img-responsive center-block" alt="...">
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
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
			<li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>
	</div>

 {{-- blog not working yet --}}
   	<div class="text-center col-lg-12 fill" id="content-blog">
   		<a href="{{ route('posts.create') }}" class="btn btn-primary btn-lg">Create Post</a>

	    @foreach ($posts as $post)
	    <img class="blog-img-only" src="{{ $post->piclink }}">
    	<h1>{{ $post->title }}</h1>
    	<h5>{{ date('M j, Y g:ia', strtotime($post->created_at)) }}</h5>
    		<a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a>
    		{{-- {!! Form::open()  !!} --}}

			{!! Html::linkRoute('posts.destroy', 'delete', array($post->id), array('class'=> 'btn btn-danger')) !!}
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