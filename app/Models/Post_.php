<?php

namespace App\Models;



class Post 
{
    private static $blog_posts = [
        [
            "title" => "judul post pertama",
            "slug"=>"judul-post-pertama",
            "author" => "Yusuf Al Maruf",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ratione veniam quam molestiae ab unde et impedit sit necessitatibus, voluptatem deserunt, vel velit amet modi tempora incidunt corrupti at! Esse?" 
        ],
        [
            "title" => "judul post kedua",
            "slug"=>"judul-post-kedua",
            "author" => "SEAL",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nostrum ratione veniam quam molestiae ab unde et impedit sit necessitatibus, voluptatem deserunt, vel velit amet modi tempora incidunt corrupti at! Esse?" 
        ]
    ];
    public static function all(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
