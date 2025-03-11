<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Article;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(RolesAndPermissionsSeeder::class);
        // User::factory(10)->create();

        $adminUser = User::factory()->create(
            [
                'name' => 'Admin',
                'email' => 'admin@example.test',
                'password' => bcrypt('password')
            ],
        );
        $adminUser->assignRole('admin');

        $writerUser = User::factory()->create(
            [
                'name' => 'Writer',
                'email' => 'writer@example.test',
                'password' => bcrypt('password')
            ],
        );
        $writerUser->assignRole('writer');

        $readerUser = User::factory()->create(
            [
                'name' => 'Reader',
                'email' => 'reader@example.test',
                'password' => bcrypt('password')
            ],
        );
        $readerUser->assignRole('reader');

        Category::factory(5)->create();
        Tag::factory(10)->create();

        Article::factory(20)->create()->each(function ($post) {
            $tags = Tag::inRandomOrder()->take(rand(1, 3))->pluck('id')->toArray();
            $post->tags()->attach($tags);
        });
    }
}
