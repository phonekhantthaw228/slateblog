<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->word(),
            'user_id'=>rand(1,10),
            'category_id'=>rand(1,10),
            'content'=>fake()->paragraphs(5, true),
            'image' => 'https://picsum.photos' . fake()->numberBetween(1, 1000),

        ];
    }
}
