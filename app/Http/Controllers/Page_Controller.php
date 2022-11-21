<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Page_Controller extends Controller
{
    //
    public function index()
    {
        return view('content_page/index');
    }
    public function book_detail()
    {
        return view('content_page/book_detail');
    }
    public function categories()
    {
        return view('content_page/categories');
    }
    public function publishers()
    {
        return view('content_page/publishers');
    }
    public function contact()
    {
        return view('content_page/contact');
    }
}
