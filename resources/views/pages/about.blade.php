@extends('app')


@section('content')
<h1> About Me: </h1>
<div class="jumbotron">
	<div class="container">
		<h1>Yo {{ $first }}</h1>

		<p>
			<a class="btn btn-info btn-lg">Learn more</a>
		</p>
	</div>
</div>
@stop