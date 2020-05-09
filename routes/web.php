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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/chat-room', 'ChatRoomController@index')->name('chat-room');
Route::post('/chat-room', 'ChatRoomController@beginChat')->name('chat-room.beginchat');
Route::post('/chat-room/save', 'ChatRoomController@saveMessage')->name('chat-room.save.message');
