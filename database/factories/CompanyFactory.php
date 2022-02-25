<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->company(),
            'certificate'=> $this->faker->imageUrl() ,
            'address'=> $this->faker->address() ,
            'email'=> $this->faker->companyEmail(),
            'url'=> $this->faker->url() ,
            'location'=> $this->faker->city(),
            'services'=>   $this->faker->realText(10),
            'user_id'=>function(){return User::all()->random() ;},

        ];
    }
}
