@extends('app')

@section('content')
    <div class="jumbotron">
    	<div class="container">
    		<h1>{{$article->title}}:</h1>
    		<p>{{$article->body}}</p>
    		<p>
    			<a class="btn btn-primary btn-lg">Learn more</a>
    		</p>
    	</div>
    </div>

@stop