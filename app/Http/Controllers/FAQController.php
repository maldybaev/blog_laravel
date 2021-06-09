<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class FAQController extends Controller
{

   public function index()
  {
    $faqs = [
      [
        'title' => 'Как создать пост?',
        'author' => 'Асан',
        'date' => '28.05.21',
        'description' => 'Для того, чтобы создать новый пост, вам надо авторизоваться под своими учетными данными и в личном кабинете нажать пункт "Создать пост"'
      ],
      [
        'title' => 'Как зарегистрироваться?',
        'author' => 'Усон',
        'date' => '27.05.21',
        'description' => 'На главной странице нажмите кнопку "Регистрация" рядом с кнопкой "Войти".'
      ]

    ];
    return view('faq.index', ['faqs' => $faqs]);
  }

  public function create()
  {
    echo "Это страница <b>создания</b> FAQ вопроса";
  }

    public function edit()
  {
    echo "Это страница <b>изменения</b> FAQ вопроса";
  }

      public function delete()
  {
    echo "Это страница <b>удаления</b> FAQ вопроса";
  }

}