<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthSignIn extends BaseController
{
  public function index()
  {
    return view('auth/login');
  }
}
