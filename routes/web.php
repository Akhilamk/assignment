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

Route::view('login','loginform');
Route::post('adlog',[test::class,'adfun']);///admin login//



//studentbutton///
Route::view('studbutton','studentlogin');

////student login///
Route::post('student',[test::class,'postfun']);
Route::get('studreg',[test::class,'regfun']);//student ddata///


Route::post('studdata',[test::class,'studlogin']);///stud login///
Route::get('viewstud',[test::class,'studview']);


/////tableview///
Route::get('viewtable',[test::class,'tableview']);

///logout///
Route::get('logot',[test::class,'logoutfun']);

/////activate////
Route::get('active',[test::class,'act']);

///inactivate///
Route::get('inact',[test::class,'inactivate']);
