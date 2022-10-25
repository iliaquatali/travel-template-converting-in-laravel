<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\BlogController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\DestinationController;
use App\Http\Controllers\frontend\GuideController;
use App\Http\Controllers\frontend\IndexController;
use App\Http\Controllers\frontend\PackageController;
use App\Http\Controllers\frontend\ServiceController;
use App\Http\Controllers\frontend\SingleController;
use App\Http\Controllers\frontend\TestimonialController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[IndexController::class,'index']);
Route::get('about',[AboutController::class,'index']);
Route::get('blog',[BlogController::class,'index']);
Route::get('contact',[ContactController::class,'index']);
Route::get('destination',[DestinationController::class,'index']);
Route::get('guide',[GuideController::class,'index']);
Route::get('package',[PackageController::class,'index']);
Route::get('service',[ServiceController::class,'index']);
Route::get('single',[SingleController::class,'index']);
Route::get('testimonial',[TestimonialController::class,'index']);



