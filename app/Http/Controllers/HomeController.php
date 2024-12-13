<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HomeBanner;

class HomeController extends Controller
{
    public function home(){
        $homebanner =  HomeBanner::all();
        return view('home',compact('homebanner'));
    }

    public function contact(){
        return view('contact');
    }
    public function about(){
        return view('about');
    }
}
