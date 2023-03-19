<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Symfony\Component\Stopwatch\Section;

class SectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Section::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'index' => $this->faker->unique()->word().':index',
            'title' => $this->faker->text(60),
            'teaser' => $this->faker->text(160),
            'body' => $this->faker->paragraph(2),
        ];
    }
}
