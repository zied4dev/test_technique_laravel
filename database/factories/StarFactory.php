<?php

namespace Database\Factories;

use App\Models\Star;
use Illuminate\Database\Eloquent\Factories\Factory;

class StarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Star::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return ['nom'=>$this->faker->name,
            'prenom'=>$this->faker->firstName,
            'url_image'=>$this->faker->imageUrl(150,150),
            'description'=>$this->faker->realText(400)
            //
        ];
    }
}
