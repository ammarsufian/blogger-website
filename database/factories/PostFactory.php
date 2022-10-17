<?php

namespace Database\Factories;

use App\Domains\ApplicationManagement\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domains\ApplicationManagement\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domains\ApplicationManagement\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => [
                'en' => $this->faker->sentence,
                'ar' => $this->faker->sentence,
            ],
            'content' => [
                'en' => $this->faker->paragraph(50),
                'ar' => $this->faker->paragraph(50),
            ],
            'category_id' =>Category::factory(),
        ];

    }
}
