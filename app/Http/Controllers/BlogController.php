<?php

namespace App\Http\Controllers;

use League\CommonMark\CommonMarkConverter;
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
        $converter = new CommonMarkConverter();
        $converte = json_encode($converter->convertToHtml($blog->content));
        return view('blog.show',compact('blog'))->with('converte',$converte);
    }
    public function img()
    {
        $img = Blog::orderBy('created_at', 'desc');
        return view('layout.app',compact('img'));
    }
}
