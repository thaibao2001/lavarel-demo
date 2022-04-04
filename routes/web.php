<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\sanphamcontroller;
use App\Http\Controllers\newscontroller;
use App\Http\Controllers\nhanviencontroller;
Route::get('/', function () {
    return view('index');
});

Route::get('/hello', function () {
    return '<h1>Hello</h1>';
});

Route::get('/hello/{name}', function () {
    return '<h1>Hello: $name</h1>';
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/admin', function () {
    return view('_layout_admin');
});
Route::get('/admin/sanpham',[sanphamcontroller::class,'index']);
Route::get('/admin/sanpham/{id}/show',[sanphamcontroller::class,'show']);
Route::get('/admin/sanpham/{id}/delete',[sanphamcontroller::class,'destroy']);
Route::post('/admin/sanpham/update',[sanphamcontroller::class,'update']);

/* Tin tức*/
Route::get('/admin/news',[newscontroller::class,'index']);
Route::get('/admin/news/{id}/show',[newscontroller::class,'show']);
Route::get('/admin/news/{id}/delete',[newscontroller::class,'destroy']);
Route::post('/admin/news/update',[newscontroller::class,'update']);

/* */
Route::get('/admin/news',[newscontroller::class,'index']);
Route::get('/admin/news/{id}/show',[newscontroller::class,'show']);
Route::get('/admin/news/{id}/delete',[newscontroller::class,'destroy']);
Route::post('/admin/news/update',[newscontroller::class,'update']);

/* */
Route::get('/admin/nhanvien',[nhanviencontroller::class,'index']);
Route::get('/admin/nhanvien/{id}/show',[nhanviencontroller::class,'show']);
Route::get('/admin/nhanvien/{id}/delete',[nhanviencontroller::class,'destroy']);
Route::post('/admin/nhanvien/update',[nhanviencontroller::class,'update']);

Route::get('/admin/products',[\App\Http\Controllers\api\apisanphamcontroller::class,function(){
    return view('admin.sanpham');
}]);
Route::get('/admin/news',[newscontroller::class,function(){
    return view('admin.news');
}]);

