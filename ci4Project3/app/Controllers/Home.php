<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data['title'] = "Home Page";
        return view('welcome_message', $data);
    }

    public function about()
    {
        $data['title'] = "About US";
        return view('about_us', $data);
    }

    public function contact()
    {
        $data['title'] = "Contact US";
        return view('contact_us', $data);
    }
}
