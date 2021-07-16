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

Route::get('/', function(){
    return view('index');
});

Route::get('/redirect', 'LoginController@redirectToProvider');
Route::get('/callback', 'LoginController@handleProviderCallback');

Route::get('/friends', 'FriendsController@getFriends');

Route::post('/addfriend', 'FriendsController@addFriend');
Route::get('/editfriend/{name}', 'FriendsController@getFriendsEdit');
Route::post('/editfriend', 'FriendsController@editfriend');