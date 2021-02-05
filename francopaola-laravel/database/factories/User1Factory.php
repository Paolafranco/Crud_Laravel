<?php

namespace Database\Factories;

use App\Models\User1;
use Illuminate\Database\Eloquent\Factories\Factory;

class User1Factory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User1::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombreUsuario'=>$this->faker->name,
            'nombreCompleto'=>$this->faker->name,
            'email'=>$this->faker->name,
            'telefono'=>$this->faker->name,
            'edad'=>$this->faker->name,
            'FechaNacimiento'=>$this->faker->name,
        ];
    }
}
