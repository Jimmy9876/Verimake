<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Blog;

class BlogController extends Controller
{
    //blog index page
    public function index()
    {
        $posts = Blog::orderBy('created_at', 'desc')->paginate(6);

        return view('blog.index',compact('posts'));
    }
    //blog detail page
    public function show(Blog $blog)
    {
        return view('blog.show',compact('blog'));
    }
     //create the article
    public function create()
    {

    }
    //store the article
    public function store()
    {

    }
     //edit the article
    public function edit()
    {

    }
    //update the article
    public function update()
    {

    }
    //delete the article
    public function delete()
    {

    }
}
