<?php

namespace Database\Factories;

use App\Models\Empresa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Empresa>
 */
class EmpresaFactory extends Factory
{
   protected $model =Empresa::class;
   
    public function definition()
    {
        return [
            //
            'idEmpresa' => $this->faker->unique()->randomNumber(5),
            'Nombre' => $this->faker->numberBetween(1,100),  // Cambiado a una palabra corta
            'Titulo' => $this->faker->sentence(),  // Cambiado a una palabra corta
            'fecha' => $this->faker->numberBetween(1,100),  // Cambiado a una fecha válida
            'idEstudiante' => $this->faker->numberBetween(1, 100), // Asumiendo que es un número válido
            'idDocente' => $this->faker->numberBetween(1,100)
            
        ];
    }
}
