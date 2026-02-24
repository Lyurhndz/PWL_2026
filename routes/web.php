<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

//EXEC1 JS2
// Route::get('/hello', function () {
//     return 'Hello World';
// });
// Route::get('/world', function () {
//     return 'World';
// });
// Route::get('/', function () {
//     return 'welcome';
// });
// Route::get('/about', function () {
//     return '244107020138 - Devin Rianto';
// });
// //
// Route::get('/user/{name}', function ($name) {
//     return 'My name '.$name;
// });
// Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
//     return 'Post to '.$postId." Comments to: ".$commentId;
// });
// Route::get('/articles/{id}', function ($Id) {
//     return 'Articles Page with ID '.$Id;
// });
// ///
// Route::get('/user/{name?}', function ($name=null) {
//     return 'My name '.$name;
// });
// Route::get('/user/{name?}', function ($name='John') {
//     return 'My name '.$name;
// });

//EXEC2 JS2
// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/about', function () {
//     return '244107020138 - Devin Rianto';
// });
// Route::get('/articles/{id}', function ($Id) {
//     return 'Articles Page with ID '.$Id;
// });

// use App\Http\Controllers\PhotoController;
// Route::resource('photos', PhotoController::class);
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
// ]);
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
// ]);

//EXEC3 JS2
// Route::get('/greeting', function () {
// 	return view('blog.hello', ['name' => 'Devin']);
// });
Route::get('/greeting', [WelcomeController::class, 'greeting']);
