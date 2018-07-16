<?php

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

Route::resource('/', 'IndexController');

//Route::get('/', function () {
//    return view('layout');
//});

Auth::routes();

// Ребят, за register-success - простите,
// но это он в основной шаблоне не влазит, не стал костылять, заюзал коробку

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
