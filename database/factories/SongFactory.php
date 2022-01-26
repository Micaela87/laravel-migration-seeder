<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
     
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'lyrics' => $this->faker->text(),
            'artists_featuring' => $this->faker->name(),
        ];
    }
}
