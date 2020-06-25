<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserLoginRequest;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function registerPage() {
      return view('auth.register');
    }

    public function registerUser(UserRegisterRequest $request) {
      User::newUser($request);
      return redirect('/');
    }

    public function loginPage() {
      return view('auth.login');
    }

    public function authUser(UserLoginRequest $request) {
      return User::authenticate($request);
    }

    public function exitUser() {
      Auth::logout();
      return redirect('/');
    }
}

