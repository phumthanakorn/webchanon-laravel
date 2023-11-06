<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::resource('frontend', HomeController::class);

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
    return view('frontend/index');
})->name("home");

Route::get('/pagepaper', function () {
    return view('frontend/paper');
})->name("pagepaper");

Route::get('/pagecheckscore', function () {
    return view('frontend/checkscore');
})->name("pagecheckscore");

Route::get('/pageabout', function () {
    return view('frontend/about');
})->name("pageabout");
