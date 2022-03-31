<?php

use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\View\View;
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




//Formxem
Route::get('/xemdiem',  function(){
    return View('SearchAndLogin');
});

Route::post('/search', 'App\Http\Controllers\mycontroller@getData');


Auth::routes();

// Phần dành cho Admin
Route::get('/admin/dashboard', 'App\Http\Controllers\mycontroller@showAdmin')
        ->middleware('checkAdmin::class');

Route::get('/admin/edit/{id}', 'App\Http\Controllers\mycontroller@editDiem')->middleware('auth');

Route::post('/admin/update/', 'App\Http\Controllers\mycontroller@updateDiem')->middleware('auth');

Route::get('cities/{id}', 'App\Http\Controllers\mycontroller@delete')->name('scores-delete')->middleware('auth');

Route::get('/logout','App\Http\Controllers\SessionsController@destroy');




//Form nhập thông tin sinh viên
Route::get('/form-sv', function () {
    return view('FormSV');
});
Route::post('/insert/submit', 'App\Http\Controllers\mycontroller@save_student');


// //Form nhập điểm
Route::get('/form-score',function (){
    return View('FormScore');
});
Route::post('/insert/score', 'App\Http\Controllers\mycontroller@saveScore');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function ()
{
    return view('SearchAndLogin');
});
