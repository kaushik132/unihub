<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class,'home']);
Route::get('contact-us',[HomeController::class,'contact']);
Route::get('about',[HomeController::class,'about']);
// blog section
Route::get('blog/{slug?}',[HomeController::class,'blog']);
Route::get('blog-details/{slug?}',[HomeController::class,'blogDetails']);

// course section
Route::get('course',[HomeController::class,'course']);
Route::get('course-details',[HomeController::class,'courseDetails']);




//Sitemap Part
Route::get('sitemap.xml',[SitemapController::class, 'index']);
//End Sitemap Part 

