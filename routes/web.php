<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardsController@index')->name('dashboard.index');
Route::get('/dashboard/login', 'DashboardsController@login')->name('dashboard.login');
Route::post('/dashboard/login', 'DashboardsController@startlogin')->name('dashboard.startlogin');
Route::get('/dashboard/register', 'DashboardsController@register')->name('dashboard.register');