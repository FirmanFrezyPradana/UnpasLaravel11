<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/',function(){
    return view('/home',['title'=>'Halaman Home']);
});
Route::get('/posts',function(){
    return view('/posts',['title'=>'Halaman Blog','posts'=> [
        [
            'id' => 1,
            'title' => 'Judul artikel 1',
            'author' => ' firman Frezy pradana',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat facere, fugit quod similique ducimus sed veniam maiores, corrupti velit iste laborum vero illo sequi ea tempore, non laboriosam dolore. Dolor nam eligendi non maiores magnam porro dolores id perspiciatis nostrum! At dolore voluptatum illo, tenetur quam nemo? Officiis, vel cupiditate.'
        ],
        [
            'id' => 2,
            'title' => 'Judul artikel 2',
            'author' => 'firman Frezy pradana',
            'body' => '  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis consequuntur, iste ipsum qui perspiciatis unde debitis ipsam laboriosam beatae explicabo aspernatur fugiat tempore. Consectetur laudantium sapiente tempora consequatur sed! Exercitationem recusandae temporibus assumenda quia laboriosam quos dolore excepturi modi impedit est. Corrupti fugit facere neque, illum deserunt explicabo nulla consequatur optio sequi laboriosam accusantium, commodi impedit, voluptatem sint vitae placeat.'

        ]
    ]]);
});
Route::get('/posts/{id}',function($id){
    $posts= [
                [
                    'id' => 1,
                    'title' => 'Judul artikel 1',
                    'author' => ' firman Frezy pradana',
                    'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat facere, fugit quod similique ducimus sed veniam maiores, corrupti velit iste laborum vero illo sequi ea tempore, non laboriosam dolore. Dolor nam eligendi non maiores magnam porro dolores id perspiciatis nostrum! At dolore voluptatum illo, tenetur quam nemo? Officiis, vel cupiditate.'
                ],
                [
                    'id' => 2,
                    'title' => 'Judul artikel 2',
                    'author' => 'firman Frezy pradana',
                    'body' => '  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis consequuntur, iste ipsum qui perspiciatis unde debitis ipsam laboriosam beatae explicabo aspernatur fugiat tempore. Consectetur laudantium sapiente tempora consequatur sed! Exercitationem recusandae temporibus assumenda quia laboriosam quos dolore excepturi modi impedit est. Corrupti fugit facere neque, illum deserunt explicabo nulla consequatur optio sequi laboriosam accusantium, commodi impedit, voluptatem sint vitae placeat.'

                ]
        ];

        $post = Arr::first($posts,function($post) use ($id){
            return $post['id']==$id;
        });

        return view('post',['title'=>'Sigle Post','post'=> $post]);
});
Route::get('/about',function(){
    return view('/about',['title'=>'Halaman About']);
});
Route::get('/contact',function(){
    return view('/contact',['title'=>'Halaman Contact','email'=>'laravel11@gmail.com','Instagram'=>'laravel11unpas_']);
});


