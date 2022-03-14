<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cancion>
 */
class CancionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'cantante' => $this->faker->text(10),
            'nombrecancion' => $this->faker->text(10),
            'letra' => $this->faker->text(50)
        ];
    }
}
