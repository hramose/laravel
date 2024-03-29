<!--Temp -->

{!! Form::hidden('user_id',1) !!}
<div class="form-group">
    {!! Form::label('title','Title:') !!}
    {!! Form::text('title', null,['class'=> 'form-control']) !!}
</div>

<!--Body Form Input -->
<div class="form-group">
    {!! Form::label('body','Body:') !!}
    {!! Form::textarea('body',null,['class'=>'form-control']) !!}
</div>

<!--published_at Form Input -->
<div class="form-group">
    {!! Form::label('published_at','Published On:') !!}
    {!! Form::input('date','published_at',date('Y-m-d'),['class'=> 'form-control']) !!}
</div>

<!--Add Article Form Input -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-default form-control']) !!}
</div>