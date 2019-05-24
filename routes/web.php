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
Route::get('/artikel', 'PostController@publicArtikel')->name('artikel');
Route::get('/detailcamp', 'detailcampController@index')->name('detailcamp');
Route::get('/IsiArtikel/{id}', 'artikelController@showartikel')->name('IsiArtikel');
// Route::resource('halo', 'PostController');
Route::get('/artpost', 'artpostController@index')->name('artpost')->middleware('auth');
Route::get('/camp', 'campController@index')->name('camp');
Route::resource('camp', 'campController');
Route::post('/post/store', 'postController@store')->name('postsstore')->middleware('auth');


Route::get('/komunitas', 'komunitasController@publicKomunitas');
Route::get('/addkomunitas', 'komunitasController@tampilanadd')->name('addkomunitas');
Route::post('/addkomunitasku','komunitasController@add')->name('addkomunitasku')->middleware('auth');;
Route::resource('kom', 'komunitasController');

Route::get('file','PostController@showUploadForm')->name('upload.file'); 
Route::get('file','PostController@storeFile');

Route::get('/tampilankom/{id}', 'tampilankomController@index')->name('tampilankom');
Route::get('/tampilankom/delete/{id}', 'tampilankomController@delete')->name('deletekom');
Route::post('/tampilankom/update', 'tampilanupController@update')->name('updatekom');
Route::get('/tampilankom/update/{id}', 'tampilanupController@index')->name('tampilanup');
// Route::get('/IsiArtikel/{id}', 'PostsController@show')->name('posts.show');
Route::resource('comments', 'CommentsController');