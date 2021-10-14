<?php

namespace App\Models;


class Post 
{
	private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Jagaddhita Arya Koswara",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima consectetur eos nulla quidem suscipit dicta neque debitis, non deleniti doloribus necessitatibus aperiam? Unde ipsa officiis dicta ipsam cupiditate repellendus inventore hic reprehenderit eius perspiciatis nesciunt omnis sunt, esse molestiae rerum voluptatum repellat distinctio laborum cumque totam possimus! Eum, quae dolores dolorum optio illo qui. Sequi accusantium natus assumenda molestiae incidunt voluptatem distinctio doloribus id veniam unde esse explicabo tempore ipsum, consequuntur perferendis ipsam quam ad aliquid consectetur asperiores fugit deserunt."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mohamad Fairuz Puta Koswara",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab vitae voluptate nesciunt cum dolorem officiis sapiente deserunt minima sint. Dignissimos nulla fuga dolore velit fugit iusto molestias accusamus tempora possimus sunt iste sed blanditiis esse eum, nobis aliquam error animi mollitia reprehenderit voluptatem dolorem numquam optio. Minima facere inventore necessitatibus reiciendis? At eos nihil quod nostrum optio inventore reprehenderit, praesentium, error qui a quaerat incidunt totam! Molestiae temporibus nostrum aspernatur tempore, iste nihil distinctio sint deserunt laudantium alias pariatur! Quidem iure eos porro saepe iste vel possimus sint similique dolor et ex, sed, fugiat tempore qui maxime odit laborum fugit."
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
