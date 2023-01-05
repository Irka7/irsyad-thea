<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Irsyad Karim',
        //     'email' => 'irsyadkarim@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::create([
            'name' => 'Fawwaz Karim',
            'username' => 'fawwazkarim',
            'email' => 'fawwazkarim@gmail.com',
            'password' => bcrypt('12345')
        ]);

        User::factory(4)->create();

        Category::create([
            'name' => 'History',
            'slug' => 'history'
        ]);

        Category::create([
            'name' => 'Art Design',
            'slug' => 'art-design'
        ]);

        Category::create([
            'name' => 'Programmer',
            'slug' => 'programmer'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Tema Pertama',
        //     'slug' => 'tema-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eius doloribus est deleniti!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eius doloribus est deleniti! Soluta, velit hic commodi architecto sunt ut asperiores est at libero eos aut ad labore doloremque illo modi voluptatum inventore. Ullam debitis illo ipsam voluptatum commodi veniam sequi impedit incidunt omnis ratione et optio, temporibus sapiente velit. Ut quas ipsa praesentium! Reiciendis ratione officiis voluptates aperiam aut nobis iste reprehenderit iure est illum aspernatur, delectus ullam, magni ex suscipit! Error repellat laborum aut qui alias impedit, itaque corporis dolorem aspernatur officiis! Veritatis commodi consectetur beatae obcaecati qui, modi aliquid maiores, ratione neque, perspiciatis itaque vero pariatur minima.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Tema kedua',
        //     'slug' => 'tema-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eius doloribus est deleniti!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eius doloribus est deleniti! Soluta, velit hic commodi architecto sunt ut asperiores est at libero eos aut ad labore doloremque illo modi voluptatum inventore. Ullam debitis illo ipsam voluptatum commodi veniam sequi impedit incidunt omnis ratione et optio, temporibus sapiente velit. Ut quas ipsa praesentium! Reiciendis ratione officiis voluptates aperiam aut nobis iste reprehenderit iure est illum aspernatur, delectus ullam, magni ex suscipit! Error repellat laborum aut qui alias impedit, itaque corporis dolorem aspernatur officiis! Veritatis commodi consectetur beatae obcaecati qui, modi aliquid maiores, ratione neque, perspiciatis itaque vero pariatur minima.',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Tema Ketiga',
        //     'slug' => 'tema-ketiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eius doloribus est deleniti!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eius doloribus est deleniti! Soluta, velit hic commodi architecto sunt ut asperiores est at libero eos aut ad labore doloremque illo modi voluptatum inventore. Ullam debitis illo ipsam voluptatum commodi veniam sequi impedit incidunt omnis ratione et optio, temporibus sapiente velit. Ut quas ipsa praesentium! Reiciendis ratione officiis voluptates aperiam aut nobis iste reprehenderit iure est illum aspernatur, delectus ullam, magni ex suscipit! Error repellat laborum aut qui alias impedit, itaque corporis dolorem aspernatur officiis! Veritatis commodi consectetur beatae obcaecati qui, modi aliquid maiores, ratione neque, perspiciatis itaque vero pariatur minima.',
        //     'category_id' => 3,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Tema Keempat',
        //     'slug' => 'tema-keempat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eius doloribus est deleniti!',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Blanditiis eius doloribus est deleniti! Soluta, velit hic commodi architecto sunt ut asperiores est at libero eos aut ad labore doloremque illo modi voluptatum inventore. Ullam debitis illo ipsam voluptatum commodi veniam sequi impedit incidunt omnis ratione et optio, temporibus sapiente velit. Ut quas ipsa praesentium! Reiciendis ratione officiis voluptates aperiam aut nobis iste reprehenderit iure est illum aspernatur, delectus ullam, magni ex suscipit! Error repellat laborum aut qui alias impedit, itaque corporis dolorem aspernatur officiis! Veritatis commodi consectetur beatae obcaecati qui, modi aliquid maiores, ratione neque, perspiciatis itaque vero pariatur minima.',
        //     'category_id' => 3,
        //     'user_id' => 2
        // ]);
    }
}
