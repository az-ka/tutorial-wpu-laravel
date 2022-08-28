<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Yae Miko',
        //     'email' => 'yae@gmail.com',
        //     'password' => bcrypt('123')
        // ]);

        // User::create([
        //     'name' => 'Raiden Shogun',
        //     'email' => 'baal@gmail.com',
        //     'password' => bcrypt('123')
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ipsa, harum, necessitatibus voluptate corporis quam debitis laborum doloribus adipisci incidunt sunt quasi voluptatum repudiandae eius similique aspernatur temporibus eveniet quaerat nam reiciendis cumque? Eius autem a at sint velit reprehenderit quo ex iusto totam cumque eum magni laborum praesentium excepturi quaerat dolores numquam, doloribus reiciendis ducimus voluptates nesciunt? Culpa ratione, eveniet assumenda dicta quas laudantium at laboriosam quos nulla corrupti? Nesciunt maxime et magni fugit iusto aperiam dolore delectus. Fugiat obcaecati, tenetur nam molestias, asperiores, perspiciatis omnis quisquam quo reiciendis minima alias enim doloremque deleniti placeat consequuntur nobis. Illo, voluptatibus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima maxime deleniti tempora obcaecati culpa nihil. Quidem, alias sed. Ea magni nam quaerat animi rem eveniet consequuntur recusandae assumenda, vel molestiae expedita sequi voluptate itaque quod, quos corporis, ipsa dolorum! Deserunt tempore quasi quos vel quas? Cumque recusandae consequatur dignissimos amet! Odio molestias nemo nesciunt, expedita magnam asperiores error nulla quos natus ex velit saepe neque ea dolorem esse incidunt accusantium eveniet consequatur soluta? Autem, quas, atque quia deserunt, molestiae commodi vel quaerat tempore cumque voluptates obcaecati id ex. Earum, beatae ex? Sed libero quo quos,</p> <p> totam voluptatibus quidem, nemo praesentium impedit quibusdam harum, molestiae dolorem expedita consequatur voluptate deleniti? Dolorum dolores, cum dolorem nisi corrupti dolore maxime tempore dignissimos enim cupiditate in ipsam nemo reiciendis tenetur ab ducimus numquam? Aspernatur, unde quis? Aspernatur, repudiandae nulla praesentium nesciunt laborum quisquam molestias vel labore maxime dicta error sapiente officia enim? Voluptatem consequuntur obcaecati deleniti at modi sunt inventore odio officia quasi dolorum unde nam id et ex, eos similique alias quisquam labore soluta quae dignissimos perspiciatis quia hic? Quae nisi perspiciatis, nihil neque doloribus quo tenetur est numquam debitis ducimus pariatur, praesentium, culpa voluptatem impedit soluta error dolore? Magni, ab maxime.</p>'
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto ipsa, harum, necessitatibus voluptate corporis quam debitis laborum doloribus adipisci incidunt sunt quasi voluptatum repudiandae eius similique aspernatur temporibus eveniet quaerat nam reiciendis cumque? Eius autem a at sint velit reprehenderit quo ex iusto totam cumque eum magni laborum praesentium excepturi quaerat dolores numquam, doloribus reiciendis ducimus voluptates nesciunt? Culpa ratione, eveniet assumenda dicta quas laudantium at laboriosam quos nulla corrupti? Nesciunt maxime et magni fugit iusto aperiam dolore delectus. Fugiat obcaecati, tenetur nam molestias, asperiores, perspiciatis omnis quisquam quo reiciendis minima alias enim doloremque deleniti placeat consequuntur nobis. Illo, voluptatibus.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid minima maxime deleniti tempora obcaecati culpa nihil. Quidem, alias sed. Ea magni nam quaerat animi rem eveniet consequuntur recusandae assumenda, vel molestiae expedita sequi voluptate itaque quod, quos corporis, ipsa dolorum! Deserunt tempore quasi quos vel quas? Cumque recusandae consequatur dignissimos amet! Odio molestias nemo nesciunt, expedita magnam asperiores error nulla quos natus ex velit saepe neque ea dolorem esse incidunt accusantium eveniet consequatur soluta? Autem, quas, atque quia deserunt, molestiae commodi vel quaerat tempore cumque voluptates obcaecati id ex. Earum, beatae ex? Sed libero quo quos,</p> <p> totam voluptatibus quidem, nemo praesentium impedit quibusdam harum, molestiae dolorem expedita consequatur voluptate deleniti? Dolorum dolores, cum dolorem nisi corrupti dolore maxime tempore dignissimos enim cupiditate in ipsam nemo reiciendis tenetur ab ducimus numquam? Aspernatur, unde quis? Aspernatur, repudiandae nulla praesentium nesciunt laborum quisquam molestias vel labore maxime dicta error sapiente officia enim? Voluptatem consequuntur obcaecati deleniti at modi sunt inventore odio officia quasi dolorum unde nam id et ex, eos similique alias quisquam labore soluta quae dignissimos perspiciatis quia hic? Quae nisi perspiciatis, nihil neque doloribus quo tenetur est numquam debitis ducimus pariatur, praesentium, culpa voluptatem impedit soluta error dolore? Magni, ab maxime.</p>'
        // ]);
    }
}
