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

Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/berita', 'BeritaController@index')->name('berita');
Route::get('/berita/{id}', 'BeritaController@show')->name('berita.show');
Route::get('/akademik', 'AkademikController@index')->name('akademik');
Route::get('/galeri', 'GaleriController@index')->name('galeri');
Route::get('/materi', 'MateriController@index')->name('materi');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::namespace('Admin')->name('admin.')->group(function(){
	Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'role_admin']], function(){
		Route::get('/home', 'HomeController@index')->name('home');
		Route::resource('/berita', 'BeritaController');
	});
});
