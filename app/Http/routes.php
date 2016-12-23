<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesController@about')->name('about');
/*注册以及显示用户登录信息*/
Route::get('/signup','UserController@create')->name('signup');
resource('users', 'UserController');
/*登陆登出以及记住我功能*/
get('/login','SessionController@create')->name('login');
post('/login','SessionController@store')->name('login');
delete('logout','SessionController@destroy')->name('logout');
