<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeBanner;
use App\Models\Blog;
use App\Models\BlogCategory;

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
    public function blog($slug = null){
        if ($slug!=null) {
            $blogCategory = BlogCategory::where('slug',$slug)->first();
            $blogList = Blog::latest()->with('blogCategory')->where('category_id',$blogCategory->id)->get();
        }else {
            $blogList = Blog::latest()->with('blogCategory')->get();
        }
        $blogCategory = BlogCategory::withcount('blogs')->limit(20)->get();
        $ressentList = Blog::latest()->with('blogCategory')->limit(3)->get();
      
        return view ('blog' ,compact('blogCategory','blogList','ressentList'));
    }

public function course(){
        return view('course');
    }


    public function courseDetails(){
        return view('courseDetails');
    }


    public function blogDetails($slug = null){

        $blogData = Blog::with('blogCategory')->where('slug',$slug)->first();

  	  $blogCategory = BlogCategory::withcount('blogs')->limit(6)->get();
	    $ressentList = Blog::latest()->with('blogCategory')->limit(3)->get();

     
        return view('blogDetails',compact('blogData','blogCategory','ressentList'));
    }
}
