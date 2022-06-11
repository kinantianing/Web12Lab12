<?php

namespace App\Controllers;

class Page extends BaseController
{
    public function about()
    {
        return view('about', [
            'title' => 'Halaman About', 
            'content' => 'Ini adalah paragraf yang menjelaskan tentang halaman about.'
        ]);
    }

    public function artikel()
    {
        return view('artikel', [
            'title' => 'Halaman Artikel', 
            'content' => 'Ini adalah paragraf yang menjelaskan tentang halaman artikel.'
        ]);
    }

    public function contact()
    {
        return view('contact', [
            'title' => 'Halaman Contact', 
            'content' => 'Ini adalah paragraf yang menjelaskan tentang halaman contact.'
        ]);
    }

    public function faqs()
    {
        echo "Ini adalah halaman Faqs";
    }

    public function tos()
    {
        echo "Ini adalah Terms of Services";
    }
}
