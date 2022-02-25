<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Receive>
 */
class ReceiveFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id'=>function(){return Product::all()->random() ;},
            'quantity'=>$this->faker->numberBetween(1,1000),
            'requested_on'=>$this->faker->dateTime(  Carbon::now()->addDays( random_int(1,90)) ),
            'received_on'=>$this->faker->dateTime(  Carbon::now()->addDays( random_int(1,90)) ),
            'description'=>$this->faker->realText(),

        ];
    }
}
