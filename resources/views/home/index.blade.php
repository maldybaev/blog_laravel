@extends('layouts.app')

 @section('title', 'Главная страница')

 @section('content')
   @foreach ($news as $new)
      <div class="item">
        <h1><a href="">{{ $new['title'] }}</a></h1>
        <div class="meta">Автор: {{ $new['author'] }}</div>
        <div class="meta">Дата: {{ $new['date'] }}</div>
        <p>{{ $new['description'] }}</p>
      </div>
      @endforeach
 @endsection