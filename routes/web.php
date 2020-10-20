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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomePageController@index')->name('index');

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');
Route::resource('/dashboard/prisioner', PrisionerController::class);
Route::resource('/dashboard/officer', OfficerController::class);
// Route::get('/dashboard/document', )