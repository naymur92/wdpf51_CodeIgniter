<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Myhome extends BaseController
{
    public function index()
    {
        $products = new ProductModel();
        $data['products'] = $products->orderBy('id', 'DESC')->findAll();
        return view('index', $data);
    }

    public function about()
    {
        return view('about_us');
    }

    public function contact()
    {
        return view('contact_us');
    }
}
