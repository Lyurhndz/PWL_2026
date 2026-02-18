<?php

use Illuminate\Support\Facades\Route;
//
Route::get('/hello', function () {
    return 'Hello World';
});
Route::get('/world', function () {
    return 'World';
});
Route::get('/', function () {
    return 'welcome';
});
Route::get('/about', function () {
    return '244107020138 - Devin Rianto';
});
//
Route::get('/user/{name}', function ($name) {
    return 'My name '.$name;
});
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post to '.$postId." Comments to: ".$commentId;
});
Route::get('/articles/{id}', function ($Id) {
    return 'Articles Page with ID '.$Id;
});
///
Route::get('/user/{name?}', function ($name=null) {
    return 'My name '.$name;
});
Route::get('/user/{name?}', function ($name='John') {
    return 'My name '.$name;
});

