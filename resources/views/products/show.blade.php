@extends('layouts.app')

 @section('title', $product['name'])

 @section('content')

 <div><a href="/products"><Назад</a></div>
  <br>
    <div class="item">
        <div><h2>{{ $product['name']}}</h2></div>
        <div> Производитель: {{ $product['manufacturer'] }}</div>
        <div> Цена: {{ $product['price'] }}</div>
        <br>
        <div> Описание: {{ $product['description'] }}</div>
    </div>

@endsection