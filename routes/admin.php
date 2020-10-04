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
//
//Route::get('/admin', function () {
//    return 'Hello Admin';
//});
//
////route name
///*Route::namespace('Front')->group(function (){
//// all route only access controller or method in folder name Front
//    Route::get('users','UserController@showUserName');
//});*/
//
//Route::group(['prefix' => 'users','middleware' => 'auth' ],function () {
//    //set of route
//    Route::get('/',function (){
//        return 'work';
//    });
//    Route::get('show','UserController@showUserName');
//    Route::delete('delete','UserController@showUserName');
//    Route::get('edit','UserController@showUserName');
//    Route::put('update','UserController@showUserName');
//});
//
//Route::get('check', function (){
//    return 'middleware';
//})->middleware('auth');
//
//Route::group(['namespace' => 'Admin'],function (){
//    Route::get('second','SecondController@showString')->middleware('auth');
//});
//Route::get('login',function (){
//    return 'Must Be Login To Access To Right';
//})->name('login');
//
//Route::group(['namespace' => 'Admin'],function (){
//    Route::get('second0','SecondController@showString0');
//
//    Route::get('second1','SecondController@showString1');
//
//    Route::get('second2','SecondController@showString2');
//});
