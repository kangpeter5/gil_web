@extends('main')

@section('title', '| Edit Blog Post')

@section('content')
	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id]]) !!}
		<div class="col-md-10">
			{{ Form::laebl('title', 'Title:') }}
			{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
			{{ Form::laebl('body', 'Description:', ['class'=> 'form-spacing-top']) }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
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
						{!! Html::linkRoute('pages.home', 'cancel', array($post->id), array('class'=> 'btn btn-warning')) !!}
						{{-- <a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span></a> --}}
					</div>
					<div class="col-sm-6">
						{!! Html::linkRoute('posts.update', '<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>', array($post->id), array('class'=> 'btn btn-success')) !!}
						{{-- <a href="#" class="btn btn-success"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a> --}}
					</div>
				</div>
			</div>
		</div>
		{!! Form::close() !!}
	</div><!-- end of .row (form) -->
@endsection