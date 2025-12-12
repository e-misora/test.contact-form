<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contact;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model=Contact::class;

    public function definition()
    {
        return [
            'last_name'=>$this->faker->lastName(),
            'first_name'=>$this->faker->firstName(),
            'gender'=>$this->faker->numberBetween(1,3),
            'email'=>$this->faker->unique()->safeEmail(),
            'tel-1'=>$this->faker->randomNumber(3,true),
            'tel-2'=>$this->faker->randomNumber(4,true),
            'tel-3'=>$this->faker->randomNumber(4,true),
            'address'=>$this->faker->address(),
            'building'=>$this->faker->secondaryAddress(),
            'detail'=>$this->faker->text()

        ];
    }
}
