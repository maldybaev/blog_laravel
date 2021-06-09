@extends('layouts.app')

 @section('title', 'Регистрация пользователя')

 @section('content')

 <div><a href="/"><Назад</a></div>
      <h1>Регистрация пользователя</h1>
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
      <form action="{{ route('users.post.reg') }}" method="POST">
        {{ csrf_field() }}

          <p>Email:
            <br>
            <input type="text" name="email" placeholder="Введите email">
          </p>
          <p>Имя:
            <br>
            <input type="text" name="firstname" placeholder="Введите имя">
          </p>
          <p>Фамилия:
            <br>
            <input type="text" name="lastname" placeholder="Введите фамилию">
          </p>
          <p>Город:
            <br>
            <input type="text" name="city" placeholder="Введите город">
          </p>
          <p>Пароль:
            <br>
            <input type="password" name="password" placeholder="Введите пароль">
          </p>
          <p>Подтверждение пароля:
            <br>
            <input type="password" name="password_confirmation" placeholder="Подтвердите пароль">
          </p>
        <input type="submit" name="submit" value="Зарегистрироваться">
        </p>
      </form>
 @endsection