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
Route::get('/sample','StudentController@index');
Route::get('/studentcreate','StudentController@create')->name('student.create');
Route::post('/studentstore','StudentController@store')->name('student.store');
Route::get('/studentedit/{id}','StudentController@edit')->name('student.edit');
Route::get('/studentdelete/{id}','StudentController@destroy')->name('student.delete');
Route::post('/studentupdate/{id}','StudentController@update')->name('student.update');
