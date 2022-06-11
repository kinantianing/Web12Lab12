<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function home()
    {
        return view('home', [
            'title' => 'Halaman Home', 
            'content' => 'Ini adalah paragraf yang menjelaskan tentang halaman home.'
        ]);
    }

    //public function index()
    //{
    //    return view('welcome_message');
    //}
}
