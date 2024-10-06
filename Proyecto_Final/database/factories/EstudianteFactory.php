<?php

namespace Database\Factories;

use App\Models\Estudiante;
use Illuminate\Database\Eloquent\Factories\Factory;

class EstudianteFactory extends Factory
{
    protected $model = Estudiante::class; // Cambia esto

    public function definition()
    {
        return [
            'idEstudiantes' => $this->faker->unique()->numerify('###########'), // 11 dígitos
            'idTesis' => $this->faker->unique()->numerify('###########'), // 11 dígitos
            'nombre' => $this->faker->name(),
            'apellidop' => $this->faker->lastName(),
            'apellidon' => $this->faker->lastName(),
            'telefono' => $this->faker->numerify('###########'), // 11 dígitos
            'correo' => $this->faker->unique()->safeEmail(),
        ];
    }
}

