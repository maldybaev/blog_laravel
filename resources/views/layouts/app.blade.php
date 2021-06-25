<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content=" ie=edge">
  <title> @yield('title') </title>
  <link href="{{asset('styles/style.css')}}" rel="stylesheet" type="text/css" >
</head>
<body>
 @section('header')
  <div id="wrapper">
    <div id="header">
      <h3><a href="#">Блог</a></h3>
    </div>
    <div class="sidebar">
      <h2>Навигация</h2>
      <ul>
        <li><a href="/">Главная</a></li>
        <li><a href="/posts">Новости</a></li>
        <li><a href="/faq">FAQ</a></li>
        <li><a href="/aboutus">О нас</a></li>
      </ul>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    {{-- {{ $categories = DB::table('categories')->get() }} --}}
    @if (isset($categories))
      <div class="sidebar">
        <h2><a href="/categories">Категории</a></h2>
        <ul>
            @foreach ($categories as $category)
            <li><a href="{{ route('categories.show', ['category_id' => $category->id]) }}">{{ $category->category }}</a></li>
            @endforeach
            <li><a href="{{ route('categories.get.create') }}">Добавить</a></li>
        </ul>
      </div>
    @endif
    <!-- Right Side Of Navbar -->
    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                            </li> 
                            <li>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
  @show
  <div class="container" id="content">
    @yield('content')
  </div>
  @section('footer')
  </div>
    <div id="footer">
      <p>&copy; 2021 Maldybaev Taalai <a href="https://github.com/maldybaev">Github</a> </p>
    </div>
    @show