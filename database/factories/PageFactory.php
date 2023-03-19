<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'index' => $this->faker->unique()->word().':index',
            'robots' => 'index,follow',
            'title' => $this->faker->text(20),
            'description' => $this->faker->paragraph(2),
            'image' => null,
        ];
    }
}
