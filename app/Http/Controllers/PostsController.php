<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
  public function index()
  {
    return view('posts.index')->with('posts', Post::all());
  }

  public function new()
  {
    return view('posts.new');
  }

  public function create(Request $request)
  {
    Post::create($request->all());
    return redirect('/posts');
  }

  public function show($id)
  {
    return view('posts.show')->with('post', Post::find($id));
  }

  public function edit($id)
  {
    return view('posts.edit')->with('post', Post::find($id));
  }

  public function update(Request $request, $id)
  {
    $post = Post::find($id);
    $post->fill($request->all());
    $post->save();
    return redirect('/posts');
  }
}
