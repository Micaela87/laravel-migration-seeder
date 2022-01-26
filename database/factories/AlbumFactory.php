<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AlbumFactory extends Factory
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
            'subtitle' => $this->faker->name(),
            'release_date' => $this->faker->dateTime(),
            'album_cover' => $this->faker->name(),
            'genre' => $this->faker->name(),
        ];
    }
}
