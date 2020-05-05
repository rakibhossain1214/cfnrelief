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

Route::get('/', function () {
    return view('home/home', ['layout'=>'other']);
});

Route::get('/home', function () {
    return view('home/home', ['layout'=>'other']);
});

Route::get('/home/rangpur', function () {
    return view('home/homeNext');
});

Route::get('/reliefdoc', function () {
    return view('reliefForm');
});


Route::get('/login', function () {
    return view('login');
});

Route::post('/home/login', 'UserController@verify');

Route::get('/addrelief', function () {
    return view('ward/addrelief');
});


Route::get('/reliefmembers', function () {
    return view('ward/relieflist');
});

Route::get('/representative', function () {
    return view('representative');
});

Route::get('/representativelist', function () {
    return view('replist');
});

Route::get('/issue-relief', function () {
    return view('issueRelief');
});

Route::get('/edit-relief', function () {
    return view('ward/editRelief');
});


Route::get('/add-help-point', function () {
    return view('ward/addhelppoint');
});

Route::get('/add-core-member', function () {
    return view('addcoremember');
});

Route::get('/allocate-relief', function () {
    return view('allocaterelief');
});

Route::get('/notifications', function () {
    return view('notifications');
});

Route::get('/requests', function () {
    return view('requests');
});

Route::get('/relief-checker', function () {
    return view('reliefcheck');
});

Route::get('/relief-checked', function () {
    return view('reliefchecked');
});

Route::get('/allocate-relief-upazilla', function () {
    return view('allocatereliefupazilla');
});

Route::get('/issue-relief-done', function () {
    return view('issueRelief2');
});

Route::get('/home-done', function () {
    return view('homedone', ['layout'=>'wardmember']);
});

Route::get('/stock', function () {
    return view('stock');
});

Route::get('/allocate-relief-union', function () {
    return view('allocatereliefunion');
});

Route::get('/relief-help', function () {
    return view('helpform');
});

Route::get('/relief-request', function () {
    return view('reliefrequest');
});