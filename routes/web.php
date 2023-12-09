<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
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
    return view('welcome');
});

Public function index () {
    return view('index');
}

Route::get('index',[example::class, 'show']);

Route::get('blog',[example::class, 'showblog']);

Route::get('contacts',[example::class, 'showcontacts']);

Route::get('price',[example::class, 'showpric']);


