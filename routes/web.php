<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('home', [
        "tittle" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "tittle" => "About",
        "nama" => "Rikza Haris Insyira",
        "email" => "3103120198@student.smktelkom-pwt.sch.id",
        "gambar" => "RVe.png"
    ]);
});

Route::get('/gallery', function () {
    return view('gallery', [
        "tittle" => "Gallery"
    ]);
});

Route::resource('/contacts', ContactController::class);