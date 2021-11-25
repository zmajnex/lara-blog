<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
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
        User::truncate();
        Post::truncate();
        Role::truncate();
        Category::truncate();
        Tag::truncate();
        Category::factory(5)->create();
        User::factory(3)->create();
        Tag::factory(15)->create();
        Post::factory(4)->create(
            [
                'user_id'=> 1,
                'category_id'=>2
            ]);
        Role::create([
            'id'=>1,
            'role_name'=>'admin',
            'created_at'=>now()
        ]);
        Role::create([
            'id'=>2,
            'role_name'=>'editor',
            'created_at'=>now()
        ]);
        Role::create([
            'id'=>3,
            'role_name'=>'user',
            'created_at'=>now()
        ]);

    }
}
