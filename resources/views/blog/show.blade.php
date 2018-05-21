@extends('layouts.app')

@section('content')

<main class="container">
	<div class="container-fluid">
		<article>
			<div class="jumbotron">
				<h1>{{ $blog->title }}</h1>
			</div>
		    <br><br>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">

						    
						        <a>{{ $blog->body }}</a>
						    
						    <hr>

				</div>
			</div>
		</article>
	</div>
</main>

@endsection