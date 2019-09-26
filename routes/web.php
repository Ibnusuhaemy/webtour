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

// use Symfony\Component\Routing\Annotation\Route;

Route::prefix('corporate-trip')->group(function () {
    Route::get('/', 'pageController@corporateTrip');
});

Route::prefix('family-trip')->group(function () {
    Route::get('/', 'pageController@familyTrip');
});

Route::get('/', 'pageController@index');
Route::get('/package-detail/{id}', 'pageController@detailPaket');
Route::post('/checkout', 'pageController@checkout');
Route::get('/contact', 'pageController@contact');
Route::get('/kebijakan-privasi', 'pageController@kebijakanPrivasi');
Route::get('/syarat-ketentuan', 'pageController@SK');
Route::get('/FAQ', 'pageController@faq');
Route::get('/blog', 'pageController@blog');
Route::get('/blog-list', 'pageController@blogList');
Route::get('/blog-detail/{id}', 'pageController@blogDetail');
Route::post('/komentar/post/{id_blog}', 'pageController@postKomentar')->name('postKomentar');
Route::get('/about', 'pageController@about');
Route::get('/gallery-testimoni', 'pageController@gallery');
Route::post('/contact/submit', 'phpMailerController@contactMail');
