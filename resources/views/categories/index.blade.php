@extends('layouts.app')

 @section('title', 'Категории')

 @section('content')

 <div>
   <h1>Категории</h1>
 </div>
 <br><br>
 <div>
    <a href="{{ route('categories.get.create') }}"><button>Добавить категорию</button></a>
 </div>
 <br><br>

 @foreach ($categories as $category)
    <div>
      <h1><a href="{{ route('categories.show', ['category_id' => $category->id]) }}">{{ $category->category }}</a></h1>
      <div>
        <a href="{{ route('categories.get.update', ['category_id' => $category->id]) }}">Редактировать</a>
        <a href="{{ route('categories.delete', ['category_id' => $category->id]) }}">Удалить</a>
      </div>
    </div>
    <hr>
    <br>
  @endforeach
 @endsection