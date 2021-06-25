@extends('layouts.app')

 @section('title', 'Редактирование категории')

 @section('content')
 <div><a href="/categories"><Назад</a></div>
    <div class="item">
      <h1>Редактирование категории</h1>
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
      <form action="{{ route('categories.post.update', ['category_id' => $category_id]) }}" method="POST">
        {{ csrf_field() }}
          <p class="des">Заголовок новости:
            <br>
            <input type="text" name="category" placeholder="Название категории" value="{{ $category->category }}"></p>
        <p>
        <input type="submit" name="submit" value="Сохранить">
        </p>
      </form>
    </div>
 @endsection