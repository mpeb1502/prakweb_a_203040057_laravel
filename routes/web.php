<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Febrian Fauzan Rachman",
        "email" => "febrianfauzan860@gmail.com",
        "image" => "febrian.jpeg"
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
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

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman singel Post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
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
    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] == $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Singel Post",
        "post" => $new_post
    ]);
});
