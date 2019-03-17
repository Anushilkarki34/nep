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

Route::get('/blogview/{B_id}','Pagecontroller@blogview')->name('blogview');
Route::get('/blog','Pagecontroller@blog');
Route::get('/','Pagecontroller@frontpage');
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/resource','Pagecontroller@resouce');
Route::get('/about',function()
{
return view('about');
});
Route::get('/product',function()
{ 
    return view('product');
});
Route::get('/store',function()
{
return view('store');
});
Route::get('/service',function()
{
return view('service');
});
Route::get('/client','Pagecontroller@showcase');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login')->name('admin.login');
    Route::post('logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register')->name('admin.register');
    Route::get('home', 'HomeController@index');
    
    Route::get('blog','Blogcontroller@index')->name('adminblog');
    Route::get('blog/add','Blogcontroller@add');
    Route::post('blog/add','Blogcontroller@save');
    Route::get('blog/edit/{B_id}','Blogcontroller@edit');
    Route::post('blog/edit/{B_id}','Blogcontroller@update');
    Route::get('blog/delete/{B_id}','Blogcontroller@del');
    

    Route::get('complain','Complaincontroller@index')->name('admincomplain');
    Route::get('order','Ordercontroller@index')->name('adminorder');
    Route::get('review','Reviewcontroller@index')->name('adminreview');


    Route::get('message','Messagecontroller@index')->name('adminmsg');
    Route::get('message/add','Messagecontroller@add');
    Route::post('message/add','Messagecontroller@save');
    Route::get('message/edit/{M_id}','Messagecontroller@edit');
    Route::post('message/edit/{M_id}','Messagecontroller@update');
    Route::get('message/delete/{M_id}','Messagecontroller@del');

    Route::get('notice','Noticecontroller@index')->name('adminnotice');
    Route::get('notice/add','Noticecontroller@add');
    Route::post('notice/add','Noticecontroller@save');
    Route::get('notice/edit/{N_id}','Noticecontroller@edit');
    Route::post('notice/edit/{N_id}','Noticecontroller@update');
    Route::get('notice/delete/{N_id}','Noticecontroller@del');

    
    Route::get('showcase','Showcasecontroller@index')->name('adminshowcase');
    Route::get('showcase/add','Showcasecontroller@add');
    Route::post('showcase/add','Showcasecontroller@save');
    Route::get('showcase/edit/{S_id}','Showcasecontroller@edit');
    Route::post('showcase/edit/{S_id}','Showcasecontroller@update');
    Route::get('showcase/delete/{S_id}','Showcasecontroller@del');

    

    
});
