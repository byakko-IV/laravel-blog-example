<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', 'PostsController@index');
Route::get('/posts/new',[
  'uses' => 'PostsController@new',
  'as' => 'posts.new'
]);
Route::post('/posts/create', [
  'uses' => 'PostsController@create',
  'as' => 'posts'
]);

Route::get('/post/{id}', [
  'uses' => 'PostsController@show',
  'as' => 'post.show'
]);

Route::get('/post/{id}/edit', [
  'uses' => 'PostsController@edit',
  'as' => 'post.edit'
]);

Route::put('/post/{id}/update', [
  'uses' => 'PostsController@update',
  'as' => 'post.update'
]);
