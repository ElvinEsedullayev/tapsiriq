<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(2),
            'price'=>rand(1,100)/10,
            'desc'=>$this->faker->text(100),
            'quantity'=>$this->faker->numberBetween(1,10),
            'img'=>'digital_'.$this->faker->unique()->numberBetween(1,22).'.jpg'
        ];
    }
}
