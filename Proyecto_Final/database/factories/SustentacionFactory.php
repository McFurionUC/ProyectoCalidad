<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Sustentacion;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sustentacion>
 */
class SustentacionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Sustentacion::class;
    public function definition()
    {
        return [
            //
            'idsustentacion' => $this->faker->unique()->numerify('###########'), 
            'idtesis' => $this->faker->unique()->numerify('###########'), 
            'fecha' => $this->faker->date('d-m-Y'), 
            'resultado' => $this->faker->numberBetween(0, 1), 
            'observacion' => $this->faker->word()
        ];
    }
}
