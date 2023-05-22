<?php

use Illuminate\Support\Facades\Route;
use App\Models\products;

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

Route::get('/', function () {
    return view('home', [
        "name" => "Kang Galon Andi",
        "email" => "mamanggalon@galon.id", 
        "image" => "http://4.bp.blogspot.com/-AAOWzD6wjDU/UAT83Qpxp4I/AAAAAAAAM-s/u9BOkKeDD3s/s1600/Duck2.jpg",
        "image2" => "https://www.scottishvoiceovers.com/media/ScroogeMcDuck.jpg",        
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About Us"
    ]);
});
