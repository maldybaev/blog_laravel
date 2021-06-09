@extends('layouts.app')

 @section('title', 'Редактирование поста')

 @section('content')
 <div><a href="/posts"><Назад</a></div>
    <div class="item">
      <h1>Редактирование поста</h1>
      <br>
      <br>
      <form action="" method="POST">
          <p class="des">Заголовок новости:
            <br>
            <input type="text" name="title" placeholder="Заголовок новости"></p>
          <p class="des">Текст новости:
            <br>
            <textarea rows="10" cols="45" name="description" placeholder="Текст новости"></textarea></p>
        <p>
        <input type="submit" name="submit" value="Отредактировать статью">
        </p>
      </form>
    </div>
 @endsection