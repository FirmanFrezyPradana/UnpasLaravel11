<?php

namespace App\Models;
use Illuminate\Support\Arr;
class Post{
        public static function all(){
            return [
                    [
                        'id' => 1,
                        'slug' => 'judul-artikel-1',
                        'title' => 'Judul artikel 1',
                        'author' => ' firman Frezy pradana',
                        'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellat facere, fugit quod similique ducimus sed veniam maiores, corrupti velit iste laborum vero illo sequi ea tempore, non laboriosam dolore. Dolor nam eligendi non maiores magnam porro dolores id perspiciatis nostrum! At dolore voluptatum illo, tenetur quam nemo? Officiis, vel cupiditate.'
                    ],
                    [
                        'id' => 2,
                        'slug' => 'judul-artikel-2',
                        'title' => 'Judul artikel 2',
                        'author' => 'firman Frezy pradana',
                        'body' => '  Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis consequuntur, iste ipsum qui perspiciatis unde debitis ipsam laboriosam beatae explicabo aspernatur fugiat tempore. Consectetur laudantium sapiente tempora consequatur sed! Exercitationem recusandae temporibus assumenda quia laboriosam quos dolore excepturi modi impedit est. Corrupti fugit facere neque, illum deserunt explicabo nulla consequatur optio sequi laboriosam accusantium, commodi impedit, voluptatem sint vitae placeat.'

                    ]
                ];
        }
        public static function find($slug):array
        {
            // callback function
            // return Arr::first(static::all(),function($post) use ($slug){
            //     return $post['slug'] == $slug;
            // });

            // arrow
            $post = Arr::first(static::all(),fn($post)=>$post['slug']==$slug);

            if(!$post){
                abort(404);
            }

            return $post;
        }
    }