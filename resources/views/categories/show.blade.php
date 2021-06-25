@extends('layouts.app')

 @section('title', $category->category)

 @section('content')

 <div><a href="/categories"><Назад</a></div>
  <br>
    <div class="item">
        <div><h1>{{ $category->category }}</h1></div>
    </div>

@endsection