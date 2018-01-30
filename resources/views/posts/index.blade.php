@extends('layouts.application')
@section('content')
  <h1>Posts</h1>
  <a href="{{ url('/posts/new')}}">Nuevo</a>
  <table class="table">
    <thead>
      <tr>
        <td>Nombre</td>
        <td>Contenido</td>
        <td>Opciones</td>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
        <tr>
          <td>{{ $post->title  }}</td>
          <td>{{ $post->body  }}</td>
          <td>
            <a href="{{ route('post.show', $post->id) }}">More</a>
            <a href="{{ route('post.edit', $post->id) }}">Edit</a>
          </td>
        </tr
      @endforeach
    </tbody>
  </table>
@endsection
