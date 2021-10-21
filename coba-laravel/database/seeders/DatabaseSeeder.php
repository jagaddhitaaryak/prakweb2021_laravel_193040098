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
        //     'name' => 'Jagaddhita Arya Koswara',
        //     'email' => 'jagaddhitaarya@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Mohamad Fairuz Putra Koswara',
        //     'email' => 'fairuzzzzzz@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dolor! Distinctio velit alias repudiandae sapiente, maiores culpa aspernatur! Nisi architecto blanditiis explicabo officiis vel laboriosam magnam maxime ad accusantium tempore sapiente',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dolor! Distinctio velit alias repudiandae sapiente, maiores culpa aspernatur! Nisi architecto blanditiis explicabo officiis vel laboriosam magnam maxime ad accusantium tempore sapiente. Sequi facilis delectus iure quisquam labore non quidem. Cumque ratione nihil voluptatibus recusandae optio. Nisi repellendus quos quibusdam itaque deserunt molestiae laborum eveniet doloremque id quis omnis officiis tempora repellat nesciunt illum odio harum, ex magni distinctio! Deleniti voluptatum quis ipsam nihil exercitationem maxime iste ipsum fuga nulla natus dolore commodi sequi totam mollitia et temporibus tenetur nam necessitatibus, non officia. Doloremque sunt quae ipsa. Quam similique qui alias!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dolor! Distinctio velit alias repudiandae sapiente, maiores culpa aspernatur! Nisi architecto blanditiis explicabo officiis vel laboriosam magnam maxime ad accusantium tempore sapiente',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dolor! Distinctio velit alias repudiandae sapiente, maiores culpa aspernatur! Nisi architecto blanditiis explicabo officiis vel laboriosam magnam maxime ad accusantium tempore sapiente. Sequi facilis delectus iure quisquam labore non quidem. Cumque ratione nihil voluptatibus recusandae optio. Nisi repellendus quos quibusdam itaque deserunt molestiae laborum eveniet doloremque id quis omnis officiis tempora repellat nesciunt illum odio harum, ex magni distinctio! Deleniti voluptatum quis ipsam nihil exercitationem maxime iste ipsum fuga nulla natus dolore commodi sequi totam mollitia et temporibus tenetur nam necessitatibus, non officia. Doloremque sunt quae ipsa. Quam similique qui alias!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dolor! Distinctio velit alias repudiandae sapiente, maiores culpa aspernatur! Nisi architecto blanditiis explicabo officiis vel laboriosam magnam maxime ad accusantium tempore sapiente',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dolor! Distinctio velit alias repudiandae sapiente, maiores culpa aspernatur! Nisi architecto blanditiis explicabo officiis vel laboriosam magnam maxime ad accusantium tempore sapiente. Sequi facilis delectus iure quisquam labore non quidem. Cumque ratione nihil voluptatibus recusandae optio. Nisi repellendus quos quibusdam itaque deserunt molestiae laborum eveniet doloremque id quis omnis officiis tempora repellat nesciunt illum odio harum, ex magni distinctio! Deleniti voluptatum quis ipsam nihil exercitationem maxime iste ipsum fuga nulla natus dolore commodi sequi totam mollitia et temporibus tenetur nam necessitatibus, non officia. Doloremque sunt quae ipsa. Quam similique qui alias!',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dolor! Distinctio velit alias repudiandae sapiente, maiores culpa aspernatur! Nisi architecto blanditiis explicabo officiis vel laboriosam magnam maxime ad accusantium tempore sapiente',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas, dolor! Distinctio velit alias repudiandae sapiente, maiores culpa aspernatur! Nisi architecto blanditiis explicabo officiis vel laboriosam magnam maxime ad accusantium tempore sapiente. Sequi facilis delectus iure quisquam labore non quidem. Cumque ratione nihil voluptatibus recusandae optio. Nisi repellendus quos quibusdam itaque deserunt molestiae laborum eveniet doloremque id quis omnis officiis tempora repellat nesciunt illum odio harum, ex magni distinctio! Deleniti voluptatum quis ipsam nihil exercitationem maxime iste ipsum fuga nulla natus dolore commodi sequi totam mollitia et temporibus tenetur nam necessitatibus, non officia. Doloremque sunt quae ipsa. Quam similique qui alias!',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
        





    }
}
