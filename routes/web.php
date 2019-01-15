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

Route::get('/','FrontEndController@index')->name('front.index');
Route::get('/about','FrontEndController@about')->name('front.about');
Route::get('/projects','FrontEndController@projects')->name('front.projects');
Route::get('/news&events','FrontEndController@news')->name('front.news&events');
Route::get('/notice','FrontEndController@notice')->name('front.notice');
Route::get('/photogallery','FrontEndController@photogallery')->name('front.photogallery');
Route::get('/contact','FrontEndController@contact')->name('front.contact');
Route::get('/donate','FrontEndController@donate')->name('front.donate');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get','post'],'/adminlogin','AdminController@login')->name('admin.login');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin-dashboard','AdminController@dashboard')->name('admin.dashboard');
    Route::get('/adminprofile/{id}','AdminController@profile')->name('admin.profile');
    Route::post('/adminupdate/{id}','AdminController@update')->name('admin.update');
});

Route::get('/logout','AdminController@logout')->name('admin.logout');


