<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Yae Miko",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse nemo, distinctio sed excepturi rerum, nihil nesciunt voluptatem fugiat dolores consectetur harum id modi, recusandae quos? Sapiente nostrum eligendi natus ab! Quo accusantium illum accusamus quisquam praesentium laudantium eaque iste amet eos quas harum quos ad culpa molestiae dolorem architecto, natus consequatur! Exercitationem facilis quae ipsum accusamus aut natus asperiores ipsa nobis eligendi autem. Fugit quasi voluptatum eius, odio commodi aspernatur debitis! Ipsam, non culpa. In corporis cupiditate quos assumenda, iste nam, nesciunt ipsam earum accusamus deserunt quaerat doloremque? Ab laudantium iste officiis sequi dolore in, molestias error quo dicta eum."
        ],
        [
            "title" => "Judul Post Dua",
            "slug" => "judul-post-kedua",
            "author" => "Yae Miko",
            "body" => "Sapiente nostrum eligendi natus ab! Quo accusantium illum accusamus quisquam praesentium laudantium eaque iste amet eos quas harum quos ad culpa molestiae dolorem architecto, natus consequatur! Exercitationem facilis quae ipsum accusamus aut natus asperiores ipsa nobis eligendi autem. Fugit quasi voluptatum eius, odio commodi aspernatur debitis! Ipsam, non culpa. In corporis cupiditate quos assumenda, iste nam, nesciunt ipsam earum accusamus deserunt quaerat doloremque? Ab laudantium iste officiis sequi dolore in, molestias error quo dicta eum."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();

        // $post = [];

        // foreach ($posts as $key) {
        //     if ($key["slug"] === $slug) {
        //         $post = $key;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
