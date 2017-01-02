<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'BanhController@show');

Route::get('/index', 'BanhController@show');

    
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
//Route::get('/product', function () {
   // return view('product');
//});
Route::get('/product', 'productController@Product');
 
Route::get('/services', function () {
    return view('services');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});
//duong dan den form them user
Route::post('/Them','productController@create');
//Route::post('/Them','productController@store');
//Route::get('/Them', function () {
//    return view('Them');
//});


Route::resource('/index', 'DuLieuController@getDanhSach');



