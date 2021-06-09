<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title =  $this->faker->text(20);
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'teaser' => $this->faker->sentence(),
            'body' => $this->faker->randomHtml(12,4),
            'created_by' => User::factory()->create()->id
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
                'published_at' => $this->faker->dateTimeBetween('-1year'),
            ];
        });
    }

}

