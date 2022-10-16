<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Domains\ApplicationManagement\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Domains\ApplicationManagement\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => [
                'en' => $this->faker->word,
                'ar' => $this->faker->word,
            ],
            'is_active' => $this->faker->boolean,
        ];
    }
}
