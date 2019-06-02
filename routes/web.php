<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', 'PagesController@indexcontactus');
Route::get('/about', function(){
    return view('aboutus');
});
