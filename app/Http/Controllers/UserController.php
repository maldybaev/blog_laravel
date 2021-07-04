<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('id', 1)->with('phome')->first();

        return view('users.index', ['users' => $users]);
    }
}
