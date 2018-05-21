@extends('layouts.app')

@section('content')

<main class="container">
	<div class="container-fluid">
	<div class="jumbotron">
				<h1>Latest Blog Posts</h1>
			</div>
	<div class="row">
		
			
		<div class="col-md-6 col-md-offset-3">
				@foreach($blogs as $blog)
				    <article>
				    	<h2><a href="{{ action('BlogController@show',[$blog->id])}}">{{ $blog->title }}</a></h2>
				        <h3>{{ $blog->body }}</h3>
				    </article>
				    <hr>
				@endforeach
		</div>
	</div>
	</div>
</main>

@endsection