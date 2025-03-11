<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->words(6, true),
            'content' => fake()->sentences(20, true),
            'image' => 'https://media.sproutsocial.com/uploads/2022/05/How-to-post-on-instagram-from-pc.jpg',
            'category_id' => Category::inRandomOrder()->first()->id,
            'user_id' => User::whereHas('roles', function ($query) {
                $query->where('name', '=', 'admin');
            })->inRandomOrder()->first()->id
        ];
    }
}
