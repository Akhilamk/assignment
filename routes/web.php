<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;
use App\Http\Controllers\admin;

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
////login////
// Route::view('login','loginform');
// Route::post('login',[test::class,'logfun']);
// Route::get('new',[test::class,'getfun']);

Route::get('log',[admin::class,'getfun']);
Route::post('log',[admin::class,'logfun']);
Route::get('adminhome',[admin::class,'dispfun']);///diaplay adminhome///
///logout///
Route::get('logot',[admin::class,'logoutfun']);

////student///
Route::view('student','student');
Route::post('student',[admin::class,'regfun']);////insert///

////studentlogin////
// Route::post('studlogin',[admin::class,'postfun']);
// // Route::get('studlogin',[admin::class,'getview']);
// Route::get('view',[admin::class,'disp']);///display studenthome

Route::post('studlogin',[admin::class,'postfun']);
Route::get('view',[admin::class,'disp']);///display studenthome

/////activate////
Route::get('active',[admin::class,'act']);
///inactivate///
Route::get('inact',[admin::class,'inactivate']);





