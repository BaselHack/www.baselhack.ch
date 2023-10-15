<?php

namespace Database\Factories;

use App\Enums\CompanyTypeEnum;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ChallengeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(20),
            'slug' => Str::slug($this->faker->text(20)),
            'subtitle' => $this->faker->text(60),
            'description' => $this->faker->text(200),
            'company_id' => Company::factory(),
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
                'published' => true,
            ];
        });
    }

    /**
     * Indicate that the user is suspended.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function partner()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => CompanyTypeEnum::PARTNER()->value,
            ];
        });
    }

    /**
     * Indicate that the user is suspended.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function sponsorMain()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => CompanyTypeEnum::SPONSOR_MAIN()->value,
            ];
        });
    }

    /**
     * Indicate that the user is suspended.
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function sponsor()
    {
        return $this->state(function (array $attributes) {
            return [
                'type' => CompanyTypeEnum::SPONSOR()->value,
            ];
        });
    }
}
