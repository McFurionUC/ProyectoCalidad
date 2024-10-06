<?php

namespace Database\Factories;
use App\Models\Diploma;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Diploma>
 */
class DiplomaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */protected $model = Diploma::class;
    public function definition()
    {
        return [
            //
            'iddiploma' => $this->faker->unique()->numerify('###########'), 
'idestudiante' => $this->faker->unique()->numerify('###########'), 
'fecha' => $this->faker->date('d-m-Y'), 
'titulo'=> $this ->faker->word() 
            
        ];
    }
}
