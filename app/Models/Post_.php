<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Febrian Fauzan R",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius sit iure aliquam maiores laudantium maxime inventore illum beatae aliquid distinctio minima, aut quidem aspernatur, error praesentium deserunt perferendis vitae quos eum odit quod magnam minus. Sint aut voluptatum iure eos illum repudiandae impedit corrupti reprehenderit consectetur! Magnam, vero optio. Voluptatibus molestias nostrum, perferendis corporis quo cum quaerat. Repellendus, quos. Provident corrupti repudiandae, cum eos earum esse dolore sunt nostrum non 
            perspiciatis unde possimus asperiores doloribus, cupiditate aliquam, 
            sed mollitia dolor? Voluptatibus cum impedit rem accusantium maxime soluta est sed ad?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Ikhsan Rachmat",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eius sit iure aliquam maiores laudantium maxime inventore illum beatae aliquid distinctio minima, aut quidem aspernatur, error praesentium deserunt perferendis vitae quos eum odit quod magnam minus. Sint aut voluptatum iure eos illum repudiandae impedit corrupti reprehenderit consectetur! Magnam, vero optio. Voluptatibus molestias nostrum, perferendis corporis quo cum quaerat. Repellendus, quos. Provident corrupti repudiandae, cum eos earum esse dolore sunt nostrum non 
            perspiciatis unde possimus asperiores doloribus, cupiditate aliquam"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
