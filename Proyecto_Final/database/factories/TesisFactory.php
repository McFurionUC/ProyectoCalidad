<?php

namespace Database\Factories;
use App\Models\Tesis;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tesis>
 */
class TesisFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Tesis::class;
    public function definition()
    {
        return [
            //
            
            'idTesis' => $this->faker->unique()->numerify('###########'), 
            'Nombre' => $this->faker->name(),
            'Sustento' => $this->faker->numberBetween(0, 1), 
            'Calificacion' => $this->faker->numberBetween(0, 20),
        ];
    }
}
