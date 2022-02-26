<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
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
            'name'=>$this->faker->words( random_int(1,4), true ),
            'quantity'=>$this->faker->numberBetween(1,1000),
            'weight'=>$this->faker->numberBetween(1,1000),
            'type' =>$this->faker->boolean(),
            'durability'=>$this->faker->boolean(),
            'expiry_date'=>$this->faker->dateTime( Carbon::now()->addDays( random_int(1,90)) ),
            'image'=> $this->faker->imageUrl() ,
            'location'=> $this->faker->city() ,
            'description'=>$this->faker->realText(),
            'transport' =>$this->faker->boolean(),
            'status'=>$this->faker->boolean(),
            'user_id'=>function(){return User::all()->random() ;},

        ];
    }
}
