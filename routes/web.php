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

Route::get('/', function () {
    return view('welcome');
});

/**
 * JDX 사용자 화면
 */
Route::get('/{slug}', function ($slug) {
    return view($slug);
});

/**
 * JDX 관리자 화면
 */
Route::get('/admin', function () {
    return view('admin/dash');
});
Route::get('/admin/{slug}', function ($slug) {
    return view('admin/'.$slug);
});
Route::get('/admin/{folder}/{slug}', function ($folder, $slug) {
    return view('admin/'.$folder.'/'.$slug);
});
