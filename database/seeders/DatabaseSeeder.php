<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        // User::create([
        //     'name'=>'Sandika Galih',
        //     'email'=>'sandikagalih@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);
        // User::create([
        //     'name'=>'Dody Mulyadi',
        //     'email'=>'dodymulyadi@gmail.com',
        //     'password'=>bcrypt('12345')
        // ]);

        User::factory(5)->create();
        Category::create([
            'name'=>'Web Programming',
            'slug'=>'web-programming'
        ]);
        Category::create([
            'name'=>'Persona',
            'slug'=>'persona'
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum dolor sit amet.',
        //     'body'=>'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet..',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);
        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum dolor sit amet.',
        //     'body'=>'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet..',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);
        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum dolor sit amet.',
        //     'body'=>'Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.Lorem ipsum dolor sit amet..',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

    }
}
