<?php

namespace Database\Factories;

use App\Enums\CompanyTypeEnum;
use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'image' => null,
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
