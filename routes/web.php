<?php

use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('/home',['title'=>'Halaman Home']);
});
Route::get('/blog',function(){
    return view('/blog',['title'=>'Halaman Blog','judul'=>'Judul laravel 11','artikel'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem accusantium inventore cumque aspernatur culpa, praesentium nostrum eius veritatis voluptatum tempore.']);
});
Route::get('/about',function(){
    return view('/about',['title'=>'Halaman About']);
});
Route::get('/contact',function(){
    return view('/contact',['title'=>'Halaman Contact','email'=>'laravel11@gmail.com','Instagram'=>'laravel11unpas_']);
});


