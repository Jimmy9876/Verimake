<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowController extends Controller
{
    //首页
    public function index()
    {
        return view('index');
    }

    //about页面
    public function about()
    {
        return view('about');
    }

    //contact page
    public function contact()
    {
        return view('contact');
    }
}
