@extends('layouts.app')

@section('content')

<main class="container-fluid">
	<div class="container-fluid">
	<div class="jumbotron">
				<h1>Edit Blog Posts</h1>
			</div>
	<div class="row">
		
			
		<div class="col-lg-10 col-lg-offset-2">
				{!! Form::model($blog,['method' => 'PATCH', 'action' => 'BlogController@store']) !!}
			     {{ method_field('PATCH')}}
				  <div class="form-group">
				  	{!! Form::label('title','Title:') !!}
				    {!! Form::text('title',null,['class' => 'form-control']) !!}
				  </div>
				  <div class="form-group">
				  	{!! Form::label('body','Body:') !!}
				    {!! Form::textarea('body',null,['class' => 'form-control']) !!}
				  </div>
				  <div class="form-group">
				    {!! Form::submit('Edit a Blog',['class' => 'btn btn-success'])  !!}
				  </div>
				{!! Form::close() !!}

				{!! Form::open(['method' => 'DELETE', 'action' => ['BlogController@destroy' ,$blog->id]]) !!}

				<div class="form-group">
					{!! Form::submit('Delete Blog', ['class' => 'btn btn-danger']) !!}
				</div>

				{!! Form::close() !!}
		</div>
	</div>
	</div>
</main>

@endsection