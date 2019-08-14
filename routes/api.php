<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// GET API
Route::get('getall', 'getController@getPaketAll');
Route::get('getpaket', 'getController@getPaket');
Route::get('getpaketfamily', 'getController@getPaketFamily');
Route::get('getpaketcorporate', 'getController@getPaketCorporate');
Route::get('getpaketcustom', 'getController@getPaketCustom');
Route::get('getpaket/{id}', 'getController@getPaketbyid');
Route::get('getdestinasi/{id_paket}', 'getController@getDestinasi');
Route::get('getfasilitas/{id_paket}', 'getController@getFasilitas');
Route::get('gettestimoni/{id_paket}', 'getController@getTestimoni');
Route::get('gethotel/{id_paket}','getController@getHotel');
Route::get('getrencana/{id_paket}','getController@getRencana');
Route::get('getdurasi/{id_paket}','getController@getDurasi');
Route::get('getfaqs/{id_paket}','getController@getFaqs');
Route::get('getgaleri/','getController@getGaleri');
Route::get('getblog/','getController@getBlog');


Route::post('admin/login', 'AdminController@login');
Route::post('admin/register', 'AdminController@register');

Route::group(['middleware' => 'auth:admin-api','prefix' => 'admin'], function() {
    Route::get('getuser','AdminController@getuser');
    Route::post('logout','AdminController@logout');

    // POST API
    Route::post('insert/paket', 'postController@storePaket');
    Route::post('insert/destinasi/{id_paket}', 'postController@storeDestinasi');
    Route::post('insert/fasilitas/{id_paket}', 'postController@storeFasilitas');
    Route::post('insert/testimoni/{id_paket}', 'postController@storeTestimoni');
    Route::post('insert/rencana/{id_paket}', 'postController@storeRencana');
    Route::post('insert/durasi/{id_paket}', 'postController@storeDurasi');
    Route::post('insert/hotel/{id_paket}', 'postController@storeHotel');
    Route::post('insert/faqs/{id_paket}', 'postController@storeFaqs');
    Route::post('insert/galeri','postController@storeGaleri');
    Route::post('insert/komentar/{id_blog}','postController@storeKomentar');
    Route::post('insert/blog','postController@storeBlog');

    // UPDATE API
    Route::post('update/paket/{id}', 'updateController@updatePaket');
    Route::post('update/destinasi/{id}', 'updateController@updateDestinasi');
    Route::post('update/fasilitas/{id}', 'updateController@updateFasilitas');
    Route::post('update/testimoni/{id}', 'updateController@updateTestimoni');
    Route::post('update/rencana/{id}', 'updateController@updateRencana');
    Route::post('update/hotel/{id}', 'updateController@updateHotel');
    Route::post('update/durasi/{id}', 'updateController@updateDurasi');
    Route::post('update/faqs/{id}', 'updateController@updateFaqs');
    Route::post('update/blog/{id}', 'updateController@updateBlog');

    // DELETE API
    Route::delete('delete/paket/{id}','deleteController@deletePaket');
    Route::delete('delete/destinasi/{id}','deleteController@deleteDestinasi');
    Route::delete('delete/fasilitas/{id}','deleteController@deleteFasilitas');
    Route::delete('delete/testimoni/{id}','deleteController@deleteTestimoni');
    Route::delete('delete/galeri/{id}','deleteController@deleteGaleri');
    Route::delete('delete/rencana/{id}','deleteController@deleteRencana');
    Route::delete('delete/hotel/{id}','deleteController@deleteHotel');
    Route::delete('delete/durasi/{id}','deleteController@deleteDurasi');
    Route::delete('delete/faqs/{id}','deleteController@deleteFaqs');
    Route::delete('delete/komentar/{id}','deleteController@deleteKomentar');
    Route::delete('delete/blog/{id}','deleteController@deleteBlog');
});
