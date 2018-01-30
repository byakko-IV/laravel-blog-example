@extends('layouts.application')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {!! Form::open(['route' => 'posts', 'method' => 'post']) !!}
        {!! Form::label('title', 'title') !!}<br>
        {!! Form::text('title') !!}<br>
        {!! Form::label('body', 'body') !!}<br>
        {!! Form::text('body') !!}<br>
        {!! Form::submit('save') !!}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
