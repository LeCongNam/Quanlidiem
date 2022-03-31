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
Route::get('/xemdiem',  function () {
    return View('SearchAndLogin');
});

Route::post('/search', 'App\Http\Controllers\mycontroller@getData');


Auth::routes();

// Phần dành cho Admin
Route::get('/admin/dashboard', 'App\Http\Controllers\mycontroller@showAdmin')
    ->middleware('checkAdmin::class');

Route::get('/admin/edit/{id}', 'App\Http\Controllers\mycontroller@editDiem')->middleware('checkAdmin::class');

Route::post('/admin/update/', 'App\Http\Controllers\mycontroller@updateDiem')->middleware('checkAdmin::class');

Route::get('cities/{id}', 'App\Http\Controllers\mycontroller@delete')->name('scores-delete')->middleware('checkAdmin::class');

Route::get('cities/{id}', 'App\Http\Controllers\mycontroller@deleteUser')->name('user-delete')->middleware('checkAdmin::class');

Route::get('/logout', 'App\Http\Controllers\SessionsController@destroy');


Route::get('/admin/list-user', 'App\Http\Controllers\mycontroller@showAllUser')
    ->middleware('checkAdmin::class');


Route::get('/admin/reset-pass/{id}', 'App\Http\Controllers\mycontroller@resetPassword')
    ->middleware('checkAdmin::class');


//Form nhập thông tin sinh viên
Route::get('/form-sv', function () {
    return view('admin/page/FormSV');
})->middleware('checkAdmin:class');
Route::post('/insert/submit', 'App\Http\Controllers\mycontroller@save_student')->middleware('checkAdmin:class');


// //Form nhập điểm
Route::get('/form-score', function () {
    return View('admin/page/FormScore');
});

Route::post('/insert/score', 'App\Http\Controllers\mycontroller@saveScore');

// vẽ biểu đồ
Route::get('/admin/chart', 'App\Http\Controllers\AdminChart@index');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/', function () {
    return view('SearchAndLogin');
});
