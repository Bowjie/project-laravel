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

// Route::get('/', function () {
//     return view('welcome');
//     // return 'hello world';
// });
// //test page
// Route::get('/hello', function () {
//     // return view('welcome');
//     return 'hello world';
// });
// //test pages/about
// Route::get('/about', function(){
//     return view('pages.about');
// });
// // dynamic urling
// Route::get('/users/{id}', function($id){
//     return 'This is '.$id;
// });

Route::get('/', 'PagesController@index');
Route::get('/contact', 'PagesController@contact');
Route::get('/services', 'PagesController@services');
Route::get('/about', 'PagesController@about');

