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
//Route::get('/', function () {
////    return view('welcome')->with(['string' =>'Mohammed Almurisi','age'=>24]);
//    $data=[];
//    $data['id']=2;
//    $data['name']='Mohammed Almurisi';
//    $data['age']=24;
//    return view('welcome',$data);
//});
//
//    Route::get('/test1', function () {
//  return 'wellcome';
//    });
//    //route parameters
//
//Route::get('/show-number/{id}', function ($id) {
//    return $id;
//}) -> name('a');
//
//Route::get('/show-string', function () {
//    return 'wellcome';
//}) -> name('b');
//
//
//Route::resource('news','NewsController');
///*
//    Route::get('news','NewsController@index');
//    Route::post('news','NewsController@store');
//    Route::get('news/create','NewsController@create');
//    Route::get('news/{id}/edit','NewsController@edit');
//    Route::post('update/{id}','NewsController@update');
//    Route::delete('news/{id}','NewsController@delete');
//
//*/
//
//Route::get('index','Front\UserController@getIndex');
//
//Route::get('landing','Front\UserController@landing');
//Route::get('blog','Front\UserController@blog');
//Route::get('/about',function (){
//    return view("about");
//});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', function (){
    return 'Home';
});

Route::get('/dashboard', function (){
    return 'dashboard';
});
