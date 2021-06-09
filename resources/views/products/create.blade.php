@extends('layouts.app')

 @section('title', 'Ввод нового товара')

 @section('content')

 <div><a href="/products"><Назад</a></div>
      <h1>Добавление товара</h1>
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
      <form action="{{ route('products.post.create') }}" method="POST">
        {{ csrf_field() }}
          <p>Наименование товара:
            <br>
            <input type="text" name="name" placeholder="Введите наименование">
          </p>
          <p>Производитель:
            <br>
            <input type="text" name="manufacturer" placeholder="Введите производителя">
          </p>
          <p>Цена:
            <br>
            <input type="text" name="price" placeholder="Введите цену">
          </p>
            <p>Описание:
            <br>
            <textarea rows="10" cols="45" name="description" placeholder="Введите описание"></textarea></p>
        <p>
        <input type="submit" name="submit" value="Добавить товар">
        </p>
      </form>
 @endsection