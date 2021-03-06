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

Route::get('/projects/{slug}','FrontEndController@project_blog')->name('front.project_blog');
Route::post('/mail/sendmail', 'MailController@sendmail')->name('sendmail.mail');
Route::get('/about','FrontEndController@about')->name('front.about');
Route::get('/projects','FrontEndController@projects')->name('front.projects');
Route::get('/news&events','FrontEndController@news')->name('front.news&events');
Route::get('/notice','FrontEndController@notice')->name('front.notice');
Route::get('/photogallery','FrontEndController@photogallery')->name('front.photogallery');
Route::get('/contact','FrontEndController@contact')->name('front.contact');
Route::get('/member-form','FormController@member_form')->name('front.member_form');
Route::post('/sendform', 'FormController@store')->name('front.store');
Route::get('/view-form','FormController@view_form')->name('admin.view_form');
Route::get('admin/delete-form/{id}','FormController@delete')->name('admin.delete');
Route::get('/donate','FrontEndController@donate')->name('front.donate');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get','post'],'/adminlogin','AdminController@login')->name('admin.login');

Route::group(['middleware'=>['auth']],function(){
    Route::get('/admin-dashboard','AdminController@dashboard')->name('admin.dashboard');
    Route::get('/adminprofile/{id}','AdminController@profile')->name('admin.profile');
    Route::post('/adminupdate/{id}','AdminController@update')->name('admin.update');

//    Slider Routes
    Route::get('/admin/slider/','SliderController@slider')->name('slider');
    Route::post('/admin/slider/store','SliderController@store')->name('store');
    Route::get('/admin/slider/view','SliderController@view')->name('view');
    Route::get('/admin/slider/edit/{id}','SliderController@edit')->name('edit');
    Route::post('/admin/slider/update/{id}','SliderController@update')->name('slider.update');
    Route::get('/admin/delete-slider/{id}','SliderController@delete')->name('delete');

//    About Routes
    Route::get('/admin/about/','AboutController@about')->name('admin.about');
    Route::post('/admin/about/update/{id}','AboutController@about_update')->name('admin.about.update');

//    Site Routes
    Route::get('/admin/site/','SiteController@site')->name('admin.site');
    Route::post('/admin/site/update/{id}','SiteController@site_update')->name('admin.site.update');

//    Contact Routes
    Route::get('/admin/contact','ContactController@contact')->name('admin.contact');
    Route::post('/admin/contact/update/{id}','ContactController@contact_update')->name('admin.contact.update');

//Donate Routes
    Route::get('/admin/donate','DonateController@donate')->name('admin.donate');
    Route::post('/admin/donate/update/{id}','DonateController@donate_update')->name('admin.donate.update');

//Project Routes
    Route::get('/admin/project/createProject','ProjectController@createProject')->name('createProject');
    Route::post('/admin/project/storeProject','ProjectController@storeProject')->name('storeProject');
    Route::get('/admin/project/viewProjects','ProjectController@viewProjects')->name('viewProjects');
    Route::get('/admin/project/editProject/{id}','ProjectController@editProject')->name('editProject');
    Route::post('/admin/project/updateProject/{id}','ProjectController@updateProject')->name('updateProject');
    Route::get('/admin/delete-project/{id}','ProjectController@deleteProject')->name('deleteProject');

});

Route::get('/logout','AdminController@logout')->name('admin.logout');


