@extends('layouts.app')

 @section('title', 'Часто задаваемые вопросы')

 @section('content')

 @foreach ($faqs as $faq)
    <div class="item">
      <h1><a href="">{{ $faq['title'] }}</a></h1>
      <div class="meta">Автор: {{ $faq['author'] }}</div>
      <div class="meta">Дата: {{ $faq['date'] }}</div>
      <p>{{ $faq['description'] }}</p>
    </div>
    @endforeach
 @endsection