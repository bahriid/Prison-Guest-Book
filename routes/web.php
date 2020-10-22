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
Route::get('/dashboard/document', 'DocumentController@index')->name('dashboard.document');
Route::get('/dashboard/document/{id}', 'DocumentController@show')->name('dashboard.document.show');
Route::post('/dashboard/document/store', 'DocumentController@store')->name('dashboard.document.store');
Route::post('/dashboard/document/destroy/{id}', 'DocumentController@destroy')->name('dashboard.document.destroy');
Route::resource('/dashboard/prisioner', PrisionerController::class);
Route::resource('/dashboard/officer', OfficerController::class);
Route::post('/document/store', 'HomePageController@store')->name('document.store');
Route::get('/pdf/{id}', 'HomePageController@pdf')->name('document.pdf');
// Route::get('/qurban/edit/{id}', 'QurbanController@edit')->name('qurban.edit');

// Route::get('/dashboard/document', )