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
// phan quyen
Auth::routes();
Route::group(['middleware' => 'auth'], function () {
  
Route::get('Admin/banh/danhsachbanh','QuanLyBanhController@getDanhsach');
Route::get('Admin/banh/thembanh','QuanLyBanhController@getThem');
Route::post('Admin/banh/thembanh','QuanLyBanhController@postThem');

Route::get('Admin/banh/Sua-{id}','QuanLyBanhController@getSua');
Route::post('Admin/banh/Sua-{id}','QuanLyBanhController@postSua');
Route::get('Admin/banh/Xoa-{id}','QuanLyBanhController@getXoa');


Route::get('Admin/banh/user/danhsachUser','QuanLyBanhController@getDanhSachUser');
Route::get('Admin/banh/user/Sua-{id}','QuanLyBanhController@getSuaUser');
Route::post('Admin/banh/user/Sua-{id}','QuanLyBanhController@postSuaUser');

Route::get('/index',function()
{
	return view('Admin.layout.index');
	
});
Route::get('/home', 'HomeController@index');

});


Route::get('/dangxuat','QuanLyBanhController@getDangxuat');

Route::get('/loai-{idloai}','productController@show');
Route::get('/banh-{idbanh}','productController@chitiet');    	
	
Route::get('/Search', 'searchController@Search');

Route::get('/', function () {
    return view('index.default');
});	
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/product', function () {
    return view('product');
});

Route::get('/services', function () {
    return view('services');
});
Route::get('/signin', function () {
    return view('signin');
});
Route::get('/signup', function () {
    return view('signup');
});



Route::get('/create', function () {
    return view('QuanLyDuLieu.create');
});
//Route::post('/','DuLieuController@getCreate');

//Route::get('/index', 'DuLieuController@getDanhSach');











