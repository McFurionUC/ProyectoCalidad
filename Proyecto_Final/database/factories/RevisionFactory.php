<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Revision;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Revision>
 */
class RevisionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Revision::class;
    public function definition()
    {
        return [
            //
            'idrevision' => $this->faker->unique()->numerify('###########'), 
'idtesis' => $this->faker->unique()->numerify('###########'), 
'fecha' => $this->faker->date('d-m-Y'), 
'comentarios' => $this ->faker ->word(),
'estado' => $this->faker->numberBetween(0, 1),

        ];
    }
}
