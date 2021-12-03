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
            'key' => 'terms',
            'title' => 'Lorem Ipsum',
            'teaser' =>'Lorem Ipsum',
            'body' => null,
        ];
    }
}
