@extends('layouts.app')

 @section('title', $post->title)

 @section('content')

 <div><a href="/posts"><Назад</a></div>
  <br>
    <div class="item">
        <div><h2>{{ $post->title }}</h2></div>
        <br>
        <div> {{ $post->text }}</div>
    </div>

@endsection