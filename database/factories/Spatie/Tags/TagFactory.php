<?php

namespace Database\Factories\Spatie\Tags;

use Spatie\Tags\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TagFactory extends Factory
{
    protected $model =Tag::class;
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
        ];
    }
}
