<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class UserCrud extends BaseController
{
  public function index()
  {
    $users = new UserModel();
    $data['user'] = $users->orderBy('id', 'DESC')->findAll();
    return view('user_view', $data);
  }
}
