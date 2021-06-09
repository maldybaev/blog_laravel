@extends('layouts.app')

 @section('title', $post['title'])

 @section('content')

 <div><a href="/posts"><Назад</a></div>
  <br>
    <div class="item">
        <div><h2>{{ $post['title']}}</h2></div>
        <div> Автор: {{ $post['author'] }}</div>
        <div> Дата: {{ $post['date'] }}</div>
        <br>
        <div> {{ $post['description'] }}</div>
    </div>

@endsection