<?php

namespace Database\Factories;

use App\Models\Channel;
use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

class PositionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Position::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $channels = [
            'fab fa-instagram',
            'fad fa-browser',
            'fab fa-facebook-f',
            'fab fa-github',
            'fab fa-slack-hash',
            'fab fa-twitter',
            'fab fa-youtube',
            'fab fa-linkedin-in',
            'fab fa-google-plus-g',
            'fad fa-envelope-open'
        ];

        return [
            'name' => $this->faker->name,
            'icon' => $this->faker->unique()->randomElement($channels),
            'url' => $this->faker->url,
        ];
    }
    
        /**
     * Indicate that the user is suspended.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function published()
    {
        return $this->state(function (array $attributes) {
            return [
                'published' => true
            ];
        });
    }
  
}