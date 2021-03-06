<?php

namespace Database\Factories;

use App\Models\Page;
use Illuminate\Database\Eloquent\Factories\Factory;

class PageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Page::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $keys = [
          'start:index',
          'contact:index',
          'partners:index',
          'sponsors:index',
          'team:index',
        ];

        return [
            'index' => $this->faker->randomElement($keys),
            'robots' => 'index,follow',
            'title' => $this->faker->text(20),
            'description' => $this->faker->paragraph(2),
            'image' => null,
        ];
    }


}

