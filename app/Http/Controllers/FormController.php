<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

use App\Http\Requests\SignupRequest;

use App\Models\Login;

class FormController extends Controller
{
    public function login(LoginRequest $req)
    {
      $login = new Login();
      $login->name = $req->input('name');
      //$login->email = $req->input('email');
      $login->password = $req->input('password');

      $login->save();

      return redirect()-> route('home');
    }

    public function signup(SignupRequest $req)
    {
      $login = new Login();
      $login->name = $req->input('name');
      $login->email = $req->input('email');
      $login->password = $req->input('password');

      $login->save();

      return redirect()-> route('home');
    }

}
