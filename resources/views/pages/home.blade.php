@extends('main')

@section('title','| Home')

@section('content')
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
	  	<!-- Indicators -->
	  	<ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
	  	</ol>
	  	<!-- Wrapper -->
	    <div class="carousel-inner" role="slideMenu" >
	        <div class="item active">
	        	<img src="http://i.imgur.com/aPHCvJc.jpg" class="fill img-responsive center-block" alt="...">
	        </div>
	        <div class="item">
				<img src="http://i.imgur.com/4MS1Ren.jpg" class="fill img-responsive center-block" alt="...">
	        </div>
	        <div class="item">
				<img src="http://i.imgur.com/gtL4VSF.jpg" class="fill img-responsive center-block" alt="...">
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

   	<div class="text-center col-lg-12 fill" id="content-blog">
   		<a href="/create" class="btn btn-primary btn-lg">Create Post</a>
	    {{-- @foreach ($posts->all() as $post) --}}
    	<h1>Title{{-- {{ $post->title }} --}}</h1>
    	<h4 class="lead">created_at{{-- {{ date('M j, Y g:ia', strtotime($post->created_at)) }} --}}</h4>
    		{{-- {!! Html::linkRoute('posts.edit', '<span class="glyphicon glyphicon-edit"></span>', array($post->id), array('class'=> 'btn btn-primary')) !!} --}}
    		<a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
			{{-- {!! Html::linkRoute('posts.destroy', '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', array($post->id), array('class'=> 'btn btn-danger')) !!} --}}
			<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
    	<div class="col-lg-12 well">
    		<img src="">
    		<p class="lead">
    			words per minute is useless tool unless you're a security expert... even then most of the coding is done before hand(preventative){{-- {{ $post->body }} --}}
    		</p>
    	</div>
		<hr>
	    {{-- @endforeach --}}
   	</div>
   	<br>
@endsection