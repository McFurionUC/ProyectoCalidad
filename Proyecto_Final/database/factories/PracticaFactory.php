<?php

namespace Database\Factories;

use App\Models\Practica;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Practica>
 */
class PracticaFactory extends Factory
{
    
    protected $model = Practica::class;
    public function definition()
    {
        return [
            //
            'codigo' => $this->faker->unique()->randomNumber(5), 
'idestudiante' => $this->faker->numberBetween(1,100), 
'idDocente' => $this->faker->numberBetween(1,100), 
'idPracticas' => $this->faker->numberBetween(1,100),
'idEmpresa' => $this->faker->numberBetween(1,100),
'titulo' => $this->faker->sentence(2), 
'idEtapa' => $this->faker->numberBetween(1,100)

        ];
    }
}
