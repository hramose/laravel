@extends('app')

@section('content')
    <h1 class="h1">Articles:</h1>
    @foreach($articles as $article)
    <article>
        <a href="{{ action('ArticlesController@show',[$article->id]) }}" class="btn btn-link"><h2>{{$article->title}}</h2></a>
        <p>{{$article->body}}</p>
    </article>
    @endforeach
@stop