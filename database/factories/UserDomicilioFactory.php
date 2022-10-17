<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    private static $user_id=1;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //User::inRandomOrder()->first()->id,
        return [
            'user_id'=>         self::$user_id++,
            'domicilio'=>       $this->faker->streetName,
            'numero_exterior'=> $this->faker->buildingNumber,
            'colonia'  =>       $this->faker->streetSuffix,
            'cp'   =>           $this->faker->numberBetween($min = 80000, $max = 85000),
            'ciudad'    =>      $this->faker->citySuffix
        ];
    }

}
