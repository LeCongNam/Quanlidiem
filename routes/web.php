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


//Formxem
Route::get('/xemdiem',  function(){
    return View('SearchAndLogin');
});

Route::post('/search', 'App\Http\Controllers\mycontroller@getData');



// Phần dành cho Admin
Route::get('/admin/dashbord', 'App\Http\Controllers\mycontroller@showAdmin');

Route::get('/admin/edit/{id}', 'App\Http\Controllers\mycontroller@editDiem');

Route::post('/admin/update/', 'App\Http\Controllers\mycontroller@updateDiem');

Route::get('cities/{id}', 'App\Http\Controllers\mycontroller@delete')->name('scores-delete');

