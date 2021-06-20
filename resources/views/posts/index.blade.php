@extends('layouts.app')

 @section('title', 'Главные новости')

 @section('content')

 <div>
    <a href="{{ route('posts.get.create') }}"><button>Добавить новость</button></a>
 </div>
 <br><br>

 @foreach ($posts as $post)
    <div>
      <h1><a href="{{ route('posts.show', ['post_id' => $post->id]) }}">{{ $post->title }}</a></h1>
      <br>
      <p>{{ $post->text }}</p>
      <div>
        <a href="{{ route('posts.get.update', ['post_id' => $post->id]) }}">Редактировать</a>
        <a href="{{ route('posts.delete', ['post_id' => $post->id]) }}">Удалить</a>
      </div>
    </div>
    <hr>
    <br>
  @endforeach
 @endsection