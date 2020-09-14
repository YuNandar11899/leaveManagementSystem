<?php

use App\Http\Controllers\LeaveController;
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

Route::get('/user',function(){
    return view('user');
});

Route::get('/',function(){
    return view('admin');
});
Route::get('/leave/changepassword',function(){
    return view('changepassword');
});
Route::get('/leave/detail',function(){
    return view('detail');
});

Route::get('/department','DepartmentController@index');
Route::get('/department/create','DepartmentController@create');
Route::post('/department','DepartmentController@store');
Route::get('/department/{id}/edit','DepartmentController@edit');
Route::patch('/department/{id}/edit','DepartmentController@update');
Route::delete('/department/{departments}','DepartmentController@destroy');
