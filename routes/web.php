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

//  Route::get('/', function () {
//       return view('public.about');
//   });

Auth::routes(['verify'=>true]);
Route::get('/', 'HomeController@index');

Route::get('/about', 'HomeController@aboutPage');
Route::get('/contact', 'HomeController@contactPage');
Route::get('/news/all', 'CnewsController@allNews');


Route::resource('sermons','SermonController');
Route::resource('news','CnewsController');
Route::resource('admin','AdminController');

Route::resource('home','HomeController');