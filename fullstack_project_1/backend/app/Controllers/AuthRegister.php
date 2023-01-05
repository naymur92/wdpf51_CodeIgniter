<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AuthRegister extends BaseController
{
  public function index()
  {
    return view('auth/register');
  }
}
