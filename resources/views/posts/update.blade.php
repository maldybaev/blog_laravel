@extends('layouts.app')

 @section('title', 'Редактирование поста')

 @section('content')
 <div><a href="/posts"><Назад</a></div>
    <div class="item">
      <h1>Редактирование поста</h1>
      <br>
      <br>
      @if (count($errors) > 0)
        <div class="alert alert-danger">
          <ul style="color: red;">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      @endif
      <br>
      <form action="{{ route('posts.post.update', ['post_id' => $post_id]) }}" method="POST">
        {{ csrf_field() }}
          <p class="des">Заголовок новости:
            <br>
            <input type="text" name="title" placeholder="Заголовок новости" value="{{ $post->title }}"></p>
          <p class="des">Текст новости:
            <br>
            <textarea rows="10" cols="45" name="text" placeholder="Текст новости">{{ $post->text }}</textarea></p>
        <p>
        <input type="submit" name="submit" value="Отредактировать статью">
        </p>
      </form>
    </div>
 @endsection