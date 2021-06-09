@extends('layouts.app')

 @section('title', 'Авторизация')

 @section('content')

 <div><a href="/"><Назад</a></div>
      <h1>Авторизация пользователя</h1>
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
      <form action="{{ route('users.post.profile') }}" method="POST">
        {{ csrf_field() }}
          <p>E-mail:
            <br>
            <input type="text" name="email" placeholder="Введите e-mail">
          </p>
          <p>Пароль:
            <br>
            <input type="password" name="password" placeholder="Введите пароль">
          </p>
        <p>
        <input type="submit" name="submit" value="Войти">
        </p>
      </form>
 @endsection