@extends('admin')

@section('title', '| Edit Blog Post')

@section('content')
<br>
	<div class="row">
		{!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PATCH']) !!}
		<div class="col-sm-8 col-sm-offset-1">
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ["class" => 'form-control input-lg']) }}
			{{ Form::label('body', 'Description:', ['class'=> 'form-spacing-top']) }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
		</div>
		<div class="col-sm-2">
			<div class="well">
				<dt>Created at:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($post->created_at)) }}</dd>
				<dt>Updated at:</dt>
				<dd>{{ date('M j, Y h:ia', strtotime($post->updated_at)) }}</dd>
				<hr>
				{{-- <a href="{{ route('posts.update', $post->id) }}" class="btn btn-success">Save Changes</a> --}}
				{{ Form::submit('Save Changes', ['class'=>'btn btn-success']) }}
				<a href="/home" class="btn btn-warning">Cancel</a>
			</div>
		</div>
		{!! Form::close() !!}
	</div><!-- end of .row (form) -->
@endsection