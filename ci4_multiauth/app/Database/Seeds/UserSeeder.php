<?php

namespace App\Database\Seeds;

use App\Models\UserModel;
use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
  public function run()
  {
    $user_object = new UserModel();

    $user_object->insertBatch([
      [
        "name" => "Shakib Al-Hasan",
        "email" => "sakib@example.com",
        "phone_no" => "7899654125",
        "role" => "admin",
        "password" => password_hash("abcd1234", PASSWORD_DEFAULT)
      ],
      [
        "name" => "Tamim Iqbal",
        "email" => "tamim@example.com",
        "phone_no" => "8888888888",
        "role" => "editor",
        "password" => password_hash("abcd1234", PASSWORD_DEFAULT)
      ]
    ]);
  }
}
