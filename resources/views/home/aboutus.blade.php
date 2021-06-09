@extends('layouts.app')

 @section('title', 'О нас')

 @section('content')
 @foreach ($aboutus as $about)
    <div class="item">
      <h1><a href="">{{ $about['title'] }}</a></h1>
      <div class="meta">Автор: {{ $about['author'] }}</div>
      <div class="meta">Дата: {{ $about['date'] }}</div>
      <p>{{ $about['description'] }}</p>
    </div>
  @endforeach
 @endsection