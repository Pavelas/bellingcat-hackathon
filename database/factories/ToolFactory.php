<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tool;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tool>
 */
class ToolFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tool::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => $this->faker->numberBetween(1, 10),
            'topic_id' => $this->faker->numberBetween(1, 3),
            'title' => ucwords($this->faker->words(2, true)),
            'url' => $this->faker->url(),
            'description' => $this->faker->paragraph(5),
            'is_approved' => $this->faker->numberBetween(0, 1),
            'created_at' => $this->faker->dateTimeThisMonth(),
            'updated_at' => now(),
        ];
    }
}
