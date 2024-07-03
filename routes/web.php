<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/blog',function(){
    return view('/blog',['judul'=>'Judul laravel 11','artikel'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem accusantium inventore cumque aspernatur culpa, praesentium nostrum eius veritatis voluptatum tempore.']);
});
Route::get('/contact',function(){
    return view('/contact',['email'=>'laravel11@gmail.com','Instagram'=>'laravel11unpas_']);
});
Route::get('/home',function(){
    return view('/home');
});

