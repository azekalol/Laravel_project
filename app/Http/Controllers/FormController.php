<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

use App\Http\Requests\SignupRequest;

class FormController extends Controller
{
    public function login(LoginRequest $req)
    {
      //$validation = $req -> validate([
        //'name' => 'required|min:3|max:10',
        //'password' => 'required|min:7|max:22'
      //]);
    }

    public function signup(SignupRequest $req)
    {
      //$validation = $req -> validate([
        //'name' => 'required|min:3|max:10',
        //'email' => 'required|min:17|max:52',
        //'password' => 'required|min:7|max:22'
        //'password-control' => 'required|min:7|max:22'
      //]);
    }

}
