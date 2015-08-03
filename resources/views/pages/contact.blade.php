@extends('app')

@section('content')
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">

        <legend>Contact {{$first}}:</legend>

        {!! Form::open(['url'=>'about']) !!}
        <div class="form-group">
            {!! Form::label('title','Name:') !!}
            {!! Form::text('title', null,['class'=> 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title','Email:') !!}
            {!! Form::text('email','',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title','Address:') !!}
            {!! Form::textarea('text','',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('title','Phone:') !!}
            {!! Form::text('text','',['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Contact Me', ['class'=>'btn btn-primary form-control']) !!}
        </div>

        {!! Form::close() !!}



</div>


@stop