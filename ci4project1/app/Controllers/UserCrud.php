<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use CodeIgniter\HTTP\Response;

class UserCrud extends BaseController
{
  public function index()
  {
    return view('user_home');
  }

  public function list()
  {
    $users = new UserModel();
    $data['user'] = $users->orderBy('id', 'ASC')->findAll();
    // $data['user'] = $users->find(2);

    // echo "<pre>";
    // print_r($data);
    // echo "</pre>";

    return view('user_view', $data);
  }

  public function insert()
  {
    return view('add_user');
  }

  public function store()
  {
    $rules = [
      'name' => 'required',
      'email' => 'required'
    ];

    if ($this->validate($rules)) {
      $userObj = new UserModel();
      $data['name'] = $this->request->getVar('name');
      $data['email'] = $this->request->getVar('email');

      // echo "<pre>";
      // print_r($data);
      // echo "</pre>";

      $userObj->insert($data);
      $this->response->redirect('/users');
    } else {
      $data['validation'] = $this->validator;
      echo view('add_user', $data);
    }
  }


  public function delete($id)
  {
    $userObj = new UserModel();

    $userObj->where('id', $id)->delete($id);
    return $this->response->redirect('/users');
  }


  public function edit($id)
  {
    $userObj = new UserModel();
    $data['user'] = $userObj->find($id);
    // print_r($data);
    return view('edit_user', $data);
  }


  public function update($id)
  {
    $userObj = new UserModel();
    // echo $id;
    $data['name'] = $this->request->getVar('name');
    $data['email'] = $this->request->getVar('email');
    // print_r($data);

    $userObj->update($id, $data);
    return $this->response->redirect('/users');
  }
}
