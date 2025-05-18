<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Ervin',
            'body' =>'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Numquam animi repellat praesentium explicabo quos dignissimos! Totam aspernatur voluptate quos incidunt. Saepe dolorem fuga iste nihil repellat nisi ipsum? Laborum, deleniti.'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Haerin',
            'body' =>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis consectetur corporis cum ea rerum aperiam sint! Accusamus voluptatem minus magni eaque ipsum ipsam, voluptates pariatur, distinctio aut praesentium perferendis recusandae.'
        ]
        ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);
    
        if (!$post) {
            abort(404);
        }

        return $post;
    }
}
