<?php

use App\Http\Controllers\Homecontroller;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Homecontroller::class,'home']);
Route::get('about', [Homecontroller::class,'about']);
Route::get('contact', [Homecontroller::class,'contact']);
Route::get('service', [Homecontroller::class,'service']);
Route::get('login', [Homecontroller::class,'login']);

// Route::get('about', function () {
//     return view('about',[Homecontrollers::class,'home']);
// });

// Route::get('contact', function () {
//     return view('contact',[Homecontrollers::class,'home']);
// });

// Route::get('login', function () {
//     return view('login',[Homecontrollers::class,'home']);
// });
// Route::get('service', function () {
//     return view('service',[Homecontrollers::class,'home']);
// });

