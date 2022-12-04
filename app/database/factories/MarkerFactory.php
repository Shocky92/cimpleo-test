<?php

namespace Database\Factories;

use App\Models\Marker;
use Illuminate\Database\Eloquent\Factories\Factory;

class MarkerFactory extends Factory
{
    protected $model = Marker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'mobile' => $this->faker->name(),
            'description' => $this->faker->text(),
            'coordinates' => $this->faker->latitude() . ',' . $this->faker->longitude(),
        ];
    }
}
