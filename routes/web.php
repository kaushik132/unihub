<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'home']);
Route::get('contact-us',[HomeController::class,'contact']);
Route::get('about',[HomeController::class,'about']);
Route::get('blog/{slug?}',[HomeController::class,'blog']);
Route::get('blog-details/{slug?}',[HomeController::class,'blogDetails']);


//Sitemap Part
Route::get('sitemap.xml',[SitemapController::class, 'index']);
//End Sitemap Part 

