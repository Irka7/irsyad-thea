<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Tulisan Pertama",
            "slug" => "judul-tulisan-pertama",
            "author" => "Muhammad Irsyad",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, tenetur nam voluptatem, at culpa, et perferendis provident molestias ex cum eos! Minus accusantium iure qui culpa. Minima et, fuga est unde illum dolorem non, earum debitis at exercitationem minus quos eaque commodi eligendi. Rerum minima, perferendis dignissimos distinctio exercitationem voluptatum."
        ],
        [
            "title" => "Judul Tulisan Kedua",
            "slug" => "judul-tulisan-kedua",
            "author" => "Fawwaz Karim",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Maiores nesciunt fuga mollitia quasi quia, alias eos voluptatum aut fugit totam dolorum quae vero. Ut sed velit quidem ab aut odit nobis porro earum ipsa, necessitatibus possimus repellendus quae, libero aspernatur? Laboriosam, sint aut similique eius, repudiandae accusamus nam debitis placeat cupiditate consequuntur tenetur provident, soluta adipisci culpa sit qui. Id, nihil corporis! Quibusdam suscipit iste iure enim obcaecati aut possimus ex, vel repudiandae nemo omnis consequatur excepturi, aliquam accusantium adipisci voluptatum aspernatur recusandae magni cum ullam expedita tempore consectetur rerum! Sunt deserunt voluptatum hic quae quam accusantium culpa temporibus excepturi?
            "
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        $post = [];
        foreach ($posts as $p) {
            if ($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $posts->firstWhere('slug', $slug);
    }
}
