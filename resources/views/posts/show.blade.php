@extends('main')

@section('title','| Create')

@section('content')
	<div class="row">
		<div class="col-md-10">
			<h1>{{ $post->title }}</h1>

			<p class="lead">{{ $post->body }}</p>
		</div>
		<div class="col-md-2">
			<div class="well">
				<dl class="dl-horizontal">
					<dt>Created at:</dt>
					<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				</dl>
				<hr>
				<div class="row">
					<div class="col-sm-6">
						{{-- {!! Html::linkRoute('posts.edit', '<span class="glyphicon glyphicon-edit"></span>', array($post->id), array('class'=> 'btn btn-warning')) !!} --}}
						<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a>
					</div>
					<div class="col-sm-6">
						{{-- {!! Html::linkRoute('posts.destroy', '<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>', array($post->id), array('class'=> 'btn btn-danger')) !!} --}}
						<a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection