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

Route::get('/', function () {
    return view('welcome');
});

Route::get('user/{id}', 'UserController@show');

Route::get('test', 'TestController@showall');
Route::get('test/save', 'TestController@save');

Route::get('reborn', function () {
    return view('pages.index');
});
Route::get('yangzhi', function () {
    return view('pages.yangzhi');
});

Route::get('bingli', function () {
    return view('pages.bingli');
});

Route::get('binglier', function () {
    return view('pages.binglier');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('info', function() {
    return view('info');
});
