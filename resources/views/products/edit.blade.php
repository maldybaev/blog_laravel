@extends('layouts.app')

 @section('title', 'Редактирование товара')

 @section('content')

 <div><a href="/products"><Назад</a></div>
      <h1>Изменение товара</h1>
      <br>
      <br>
      <form action="" method="POST">
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
        <input type="submit" name="submit" value="Отредактировать товар">
        </p>
      </form>
 @endsection