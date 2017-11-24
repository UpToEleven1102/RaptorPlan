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
Route::middleware('auth')->group(function(){
    Route::get('/dashboard', 'ContentController@dashboard')->name('raptorplan');
});

Route::get('/testconnection','ContentController@test')->name('test_connection');

Route::get('/', 'ContentController@home')->name('home');

// Route::get('/login', function(){
//     return view('users/login');
// });

// Route::get('/register',function(){
//     return view('users/register');
// });

Auth::routes();



Auth::routes();

Route::get('/register','Controller@RegisterUser')->name('register');
// Route::get('/home', 'HomeController@index')->name('home');
