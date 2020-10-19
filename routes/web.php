<?php

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

function generateRandomString($longitud = 1) {
	return substr(str_shuffle("12345"), 0, $longitud);
}

Route::get('/', function () {
	$locale = App::getLocale();
	$url='fondo';
	$url.=generateRandomString();
	$url.='.png';
	return view('index')->with('url',$url);
})->name('index');

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('lang/{lang}', [\App\Http\Controllers\LanguageController::class, 'swap'])->name('lang.swap');

Route::view('/faq', 'faq')->name('faq');