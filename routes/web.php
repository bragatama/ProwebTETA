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
    return view('welcome');
});

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');


Route::get('/main', 'MainController@index')->name('main');
Route::get('/category_tempat wisata', 'MainController@category_tempat_wisata')->name('tempat wisata');
Route::get('/category_tempat tinggal sementara', 'MainController@category_tempat_tinggal_sementara')->name('tempat tinggal sementara');
Route::get('/category_cafe', 'MainController@category_cafe')->name('cafe');
Route::get('/category_restaurant', 'MainController@category_restaurant')->name('restaurant');
Route::get('/category_mall', 'MainController@category_mall')->name('mall');
Route::get('/register place', 'MainController@register_place')->name('register_place');
Route::get('/contact', 'MainController@contact')->name('contact');

Route::resource('admin_unverified', 'Unverified\UnverifiedPlaceController', ['as'=>'Unverified']);
Route::resource('admin_all', 'Verified\VerifiedPlaceController', ['as'=>'Verified']);
Route::resource('admin_unverifiedd', 'Unverified\UnverifiedController', ['as'=>'Unverifiedd']);
Route::resource('isi', 'Verified\IsiController', ['as'=>'isi']);

Route::post('/admin_update', 'Verified\VerifiedPlaceController@update')->name('admin_update');
Route::get('/admin_cari', 'Verified\VerifiedPlaceController@cari')->name('admin_cari');
Route::get('/admin_create', 'Verified\VerifiedPlaceController@buat')->name('admin_create');
Route::post('/admin_created', 'Verified\VerifiedPlaceController@barubaru')->name('admin_created');



Route::get('/admin_tempatwisata', 'Verified\VerifiedPlaceController@select_tempatwisata')->name('admin_tempatwisata');
Route::get('/admin_tempattinggalsementara', 'Verified\VerifiedPlaceController@select_tempattinggalsementara')->name('admin_tempattinggalsementara');
Route::get('/admin_cafe', 'Verified\VerifiedPlaceController@select_cafe')->name('admin_cafe');
Route::get('/admin_restaurant', 'Verified\VerifiedPlaceController@select_restaurant')->name('admin_restaurant');
Route::get('/admin_mall', 'Verified\VerifiedPlaceController@select_mall')->name('admin_mall');





