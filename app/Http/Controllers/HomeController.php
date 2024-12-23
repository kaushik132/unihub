<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeBanner;
use App\Models\Blog;

class HomeController extends Controller
{
    public function home(){
        $homebanner =  HomeBanner::all();
        $blog = Blog::all();
        return view('home',compact('homebanner','blog'));
    }

    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
    public function blog(){
        $blog = Blog::all();
        return view ('blog' ,compact('blog'));
    }
    public function blogDetails(){
        return view('blogDetails');
    }
}
