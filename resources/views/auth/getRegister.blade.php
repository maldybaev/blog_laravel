@extends('layouts.app')

 @section('title', 'Регистрация')

 @section('content')
 <div><a href="/">Назад</a></div>
      <h1>Регистрация</h1>
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
      <form action="{{ route('auth.post.register') }}" method="post">
        {{ csrf_field() }}
        <div>E-mail:<br>
            <input type="email" name="email" placeholder="Введите E-mail">
        </div>
        <div>Имя:<br>
            <input type="text" name="first_name" placeholder="Введите имя">
        </div>
        <div>Фамилия:<br>
            <input type="text" name="last_name" placeholder="Введите фамилию">
        </div>
        <div>Возраст:<br>
            <input type="text" name="age" placeholder="Введите возраст">
        </div>
        <div>Город:<br>
            <input type="text" name="city" placeholder="Введите город">
        </div>
        <div>Пароль:<br>
            <input type="password" name="password" placeholder="Введите пароль">
        </div>
        <input type="submit" value="Регистрация">
      </form>
 @endsection