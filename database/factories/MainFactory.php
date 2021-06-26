<?php

namespace Database\Factories;

use App\Models\Main;
use Illuminate\Database\Eloquent\Factories\Factory;

class MainFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Main::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'country' => $this->faker->country(),
            'phone' => $this->faker->e164PhoneNumber(),
            'company' => $this->faker->company(),
        ];
    }
}
