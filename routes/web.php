<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
// first Route in laravel
Route::get('greeting', function(){
    return 'Hello world';
});
// parameterized Route (neccessary) parameter
Route::get('/name/{name}', function($name){
return $name;
});
// parameterized Route (optional) parameter
Route::get('/id/{id?}', function($id=NULL){
return $id;
});
// Route Contraints In laravel
Route::get('/student/{id}', function($id){
return $id;
})->where('id','[0-9]+');
// redirection from route to another route
Route::redirect('/home','greeting');
// how to open route list
//php artisan route:list
// How to open route list except vendor files
//php artisan route:list --except-vendor
// How to open any route list using href button
Route::get('/index', function(){
    return '<a href="/home">Home</a>';
});
// blade start
// opening blade through routes
Route::get('/greeting', function(){
return view('greeting');
});
// opening parameterized Routes
Route::get('/teacher/{name?}', function($name=NULL){
return view('admin.profile', ['name'=>$name]);
});
// how to clear views cache in laravel
//php artisan view:clear
// 