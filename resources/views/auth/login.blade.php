@extends('layouts.app')

 @section('title', 'Вход')

 @section('content')
 <div><a href="/">Назад</a></div>
      <h1>Вход</h1>
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
      <form action="{{ route('auth.post.login') }}" method="post">
        {{ csrf_field() }}
        <div>E-mail:<br>
            <input type="email" name="email" placeholder="Введите E-mail">
        </div>
        <div>Пароль:<br>
            <input type="password" name="password" placeholder="Введите пароль">
        </div>
        <input type="submit" value="Войти">
      </form>
 @endsection