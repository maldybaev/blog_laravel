<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegRequest;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Http\Request;


class UserController extends Controller
{

  public function login()
  {
    return view('users.login');
  }

    public function profile(UserLoginRequest $request)
  {
    $email = $request->post('email');
    $password = $request->post('password');
    $user = [
        'email' => 'test@gmail.com',
        'password' => '123',
        'firstname' => 'Test',
        'lastname' => 'Testson'
      ];
    return view('users.profile', ['user' => $user], ['email' => $email, 'password' => $password]);

  }

    public function reg()
  {
    return view('users.reg');
  }

    public function store(UserRegRequest $request)
  {
    $email = $request->post('email');
    $firstname = $request->post('firstname');
    $lastname = $request->post('lastname');
    $city = $request->post('city');
    $password = $request->post('password');
    $confirm = $request->post('confirm');
    dd($request->post());
  }

    public function edit()
  {
    echo "Это страница <b>изменения</b> профиля пользователя";
  }

      public function delete()
  {
    echo "Это страница <b>удаления</b> профиля пользователя";
  }

}