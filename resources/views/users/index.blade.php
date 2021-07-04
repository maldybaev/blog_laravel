@extends('layouts.app')

 @section('title', 'Пользователи')

 @section('content')

 <div>
    <a href="{{ route('users.get.create') }}"><button>Добавить пользователя</button></a>
 </div>
 <br><br>

 @foreach ($users as $item)
    <div>
      <h1>Имя: {{ $item->first_name }}</h1>
      <h1>Фамилия: {{ $item->last_name }}</h1>
      <h1>E-mail: {{ $item->email }}</h1>
      <br>
      <div>
        <a href="{{ route('users.get.update', ['user_id' => $item->id]) }}">Редактировать</a>
        <a href="{{ route('users.delete', ['user_id' => $item->id]) }}">Удалить</a>
      </div>
    </div>
    <hr>
    <br>
  @endforeach
 @endsection