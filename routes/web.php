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
//Route::get('',function (){
//    return view('index.index');
//});
Route::get('','HomeController@index');

Route::get('/login','SystemController@login');
Route::post('/login',[
    'as' => 'system.verifyacc',
    'uses' => 'SystemController@VerifyAcc'
]);
Route::get('/logout','SystemController@logout');

Route::get('/gm','GmController@index');

Route::get('/sb',function (){
    return view('sb.index');
});

Route::get('/post/search',function (){
    return view('post.search');
});

Route::get('/post','PostController@index');


Route::get('/post/detail/{id}','PostController@detail');


//View::share('covid','virut nguy hiem');



