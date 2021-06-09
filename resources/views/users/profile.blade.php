@extends('layouts.app')

 @section('title', 'Главные новости')

 @section('content')

 <div>
    <a href="/home"><button>Выход</button></a>
 </div>
 <br><br>

 <?php
/* for($i = 0; $i < count($users); ++$i) {
    if ($users[$i]['email'] == $email && $users[$i]['password'] == $password) {
          echo "Добро пожаловать в личный кабинет, $users[$i]['firstname']";
          break;
      };
    }*/
    if ($user['email'] == $email && $user['password'] == $password) {
          echo "Добро пожаловать в личный кабинет, ", $user['firstname'];
      } else {
        header('Location: /login');
      };
?>

 @endsection
