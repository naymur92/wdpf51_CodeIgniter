<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;

class Myhome extends BaseController
{
    public function index()
    {
        $title['title'] = 'Home';

        $content = view('templates/header', $title);
        $content .= view('index');
        $content .= view('templates/footer');

        return $content;
    }

    public function products()
    {
        $products = new ProductModel();
        $data['products'] = $products->orderBy('id', 'DESC')->findAll();

        $title['title'] = 'Products';
        $content = view('templates/header', $title);
        $content .= view('products', $data);
        $content .= view('templates/footer');

        return $content;
    }

    public function about()
    {
        $title['title'] = 'About US';

        $content = view('templates/header', $title);
        $content .= view('about_us');
        $content .= view('templates/footer');

        return $content;
    }

    public function contact()
    {
        $title['title'] = 'Contact Us';

        $content = view('templates/header', $title);
        $content .= view('contact_us');
        $content .= view('templates/footer');

        return $content;
    }
}
