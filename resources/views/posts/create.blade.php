@extends('layouts.app')

 @section('title', 'Создание нового поста')

 @section('content')
 <div><a href="/posts">Назад</a></div>
      <h1>Создание нового поста</h1>
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
      <br>
      <form action="{{ route('posts.post.create') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
          <p>Заголовок новости:
            <br>
            <input type="text" name="title" placeholder="Введите заголовок"></p>
          <p>Текст новости:
            <br>
            <textarea rows="10" cols="45" name="text" placeholder="Введите текст новости"></textarea></p>
            <div>
              <input type="file" name="photo">
            </div>
            <br>
        <p>
        <input type="submit" value="Разместить статью">
        </p>
      </form>
 @endsection