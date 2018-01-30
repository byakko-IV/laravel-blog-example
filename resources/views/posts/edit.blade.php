@extends('layouts.application')
@section('content')
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      {!! Form::model($post, ['route' => ['post.update', $post->id], 'method' => 'PUT']) !!}
        {!! Form::label('title', 'title') !!}<br>
        {!! Form::text('title') !!}<br>
        {!! Form::label('body', 'body') !!}<br>
        {!! Form::text('body') !!}<br>
        {!! Form::submit('save') !!}
      {!! Form::close() !!}
    </div>
  </div>
@endsection
