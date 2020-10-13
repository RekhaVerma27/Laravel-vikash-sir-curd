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
    return view('welcome');
});

Route::get('/login-page', function () {
    return view('login_page');
});
//Curd Route
Route::get('/index','StudentController@studentForm');
Route::post('/save','StudentController@addForm');
Route::get('/display','StudentController@displayTable');
Route::get('/show/{id}','StudentController@showData');
Route::get('/edit/{id}','StudentController@editData');
ROute::post('/update','StudentController@updateData');
Route::get('/delete/{id}','StudentController@deleteData');

//Full Curd Routes
Route::get('/student-form','AllstudataController@studentForm');
Route::post('/save','AllstudataController@dataSave');
Route::get('/display-table','AllstudataController@displayTable');
Route::get('/show/{id}','AllstudataController@showStudent');
Route::get('/edit/{id}','AllstudataController@editData');
Route::post('/update','AllstudataController@updateData');
Route::get('/delete/{id}','AllstudataController@deleteData');