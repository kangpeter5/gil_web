@extends('admin')

@section('title','| Create')

@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2">
		<h1>Create New Post</h1>
		<hr>
		{{-- forms via laravel via https://www.youtube.com/watch?v=El4yziFuygQ --}}
		{!! Form::open(['route' => 'posts.store']) !!}
			{!! Form::label('piclink',"Link to your picture:") !!}
			{!! Form::text('piclink', null, array('class' => 'form-control'))!!}
			{!! Form::label('title','Title:') !!}
			{!! Form::text('title', null, array('class' => 'form-control')) !!}
			{!! Form::label('body', "Blog Body:") !!}
			{!! Form::textarea('body', null, array('class' => 'form-control')) !!}
			{!! Form::submit('Create Post', array('class' => 'btn-success btn-lg btn-block', 'style' => 'margin-top:20px;')) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection