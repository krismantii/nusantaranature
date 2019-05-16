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

Route::get('/', function () {
    return view('index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'Auth\RegisterController@index')->name('register');

Route::get('/aboutUs', 'aboutUsController@index')->name('abaoutUs');
// Route::get('/campaign', 'campaignController@index')->name('campaign');
Route::get('campaign', 'campController@publicCampaign');
Route::get('/profil', 'profilController@index')->name('profil');
// Route::get('/artikel', 'artikelController@index')->name('artikel');
Route::get('/artikel', 'PostController@publicArtikel');
Route::get('/detailcamp', 'detailcampController@index')->name('detailcamp');
Route::get('/IsiArtikel', 'artikelController@showartikel')->name('IsiArtikel');
Route::resource('posts', 'PostController');
Route::get('/artpost', 'artpostController@index')->name('artpost')->middleware('auth');;
Route::get('/camp', 'campController@index')->name('camp');
Route::resource('camp', 'campController');
Route::post('/post/store', 'postController@store')->name('postsstore')->middleware('auth');;


Route::get('/komunitas', 'komunitasController@index')->name('komunitas');
Route::get('/addkomunitas', 'komunitasController@tampilanadd')->name('addkomunitas');
Route::post('/addkomunitasku','komunitasController@add')->name('addkomunitasku');