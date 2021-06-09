@extends('layouts.app')

 @section('title', 'Товары')

 @section('content')

 <div>
  <a href="/products/create"><button>Добавить товар</button></a>
 </div>
 <br><br>

 @foreach ($products as $id => $product)
    <div>
      <h1><a href="{{ route('products.show', ['product_id' => $id]) }}">{{ $product['name'] }}</a></h1>
      <div class="meta">Производитель: {{ $product['manufacturer'] }}</div>
      <div class="meta">
        Цена: {{ $product['price'] }}
        @if ($product['price'] < 5000)
          <span style="color: red;">(выгодная цена!)</span>
        @endif
      </div>
      <p>{{ $product['description'] }}</p>
      <div>
        <a href="/products/edit">Редактировать</a>
        <a href="/products/delete">Удалить</a>
      </div>
    </div>
    <hr>
    <br>
    @endforeach
 @endsection