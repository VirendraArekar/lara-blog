@extends('layouts.app')

@section('content')

<main class="container-fluid">
	<div class="container-fluid">
	<div class="jumbotron">
				<h1>Create Blog Posts</h1>
			</div>
	<div class="row">
		
			
		<div class="col-lg-10 col-lg-offset-2">
				{!! Form::open(['method' => 'POST', 'action' => 'BlogController@store']) !!}
			
				  <div class="form-group">
				  	{!! Form::label('title','Title:') !!}
				    {!! Form::text('title',null,['class' => 'form-control']) !!}
				  </div>
				  <div class="form-group">
				  	{!! Form::label('body','Body:') !!}
				    {!! Form::textarea('body',null,['class' => 'form-control']) !!}
				  </div>
				  <div class="form-group">
				    {!! Form::submit('Create a Blog',['class' => 'btn btn-success'])  !!}
				  </div>
				{!! Form::close() !!}
		</div>
	</div>
	</div>
</main>

@endsection