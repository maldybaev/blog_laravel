<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

  public function index()
  {
    $news = [
      [
        'title' => 'Добро пожаловать',
        'author' => 'Admin',
        'date' => '28.05.21',
        'description' => 'Добро пожаловать в наш блог. Зарегистрированные пользователи могут создавать новые посты и редактировать уже написанные
          Также предлагаем обратить внимание на товары в нашем интернет-магазине'
      ],
      [
        'title' => 'Тест',
        'author' => 'Admin',
        'date' => '27.05.21',
        'description' => 'Тестовая новость. Тестируем вывод новостей'
      ]

    ];
    return view('home.index', ['news' => $news]);
  }

    public function aboutus()
  {
    $aboutus = [
      [
        'title' => 'О нас',
        'author' => 'Admin',
        'date' => '28.05.21',
        'description' => 'Мы - новостной блог с разнообразной тематикой. Каждый желающий найдет для себя интересную новость, статью, инструкцию или другую полезную информацию. А также, у нас можно заказать товары на все случаи жизни. Добро пожаловать. Приятного чтения и удачных Вам покупок'
      ]

    ];
    return view('home.aboutus', ['aboutus' => $aboutus]);
  }
}