<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug,
            'title' => $this->faker->sentence(),
            'excerpt' => $this->faker->sentence(random_int(9,15)),
            'body' => $this->faker->realText()
        ];
    }
}
