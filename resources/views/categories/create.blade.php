@extends('layouts.app')

 @section('title', 'Создание новой категории новостей')

 @section('content')
 <div><a href="/categories">Назад</a></div>
      <h1>Создание новой категории новостей</h1>
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
      <form action="{{ route('categories.post.create') }}" method="post">
        {{ csrf_field() }}
          <p>Название категории:
            <br>
            <input type="text" name="category" placeholder="Введите название категории"></p>
          <p>
        <input type="submit" name="submit" value="Добавить">
        </p>
      </form>
 @endsection