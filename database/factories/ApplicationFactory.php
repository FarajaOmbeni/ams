<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Application>
 */
class ApplicationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'fname' => fake()->word(),
            'lname' => fake()->word(),
            'personal_email' =>fake()->unique()->safeEmail(),
            'phone_number'=>fake()->randomNumber(8, true),
            'identification_number'=>fake()->randomNumber(8, true),
            'gender'=>fake()->randomElement(['Male','Female']),
            'city'=>fake()->randomElement(['Nairobi','Embu','Kajiado','Nakuru','Kisumu','Baringo','Machakos']),
            'postal_address'=>fake()->randomElement(['00100 - Nairobi', '00200-Kajiado','001 - Mombasa']),
            'postal_code'=>fake()->randomElement(['00100','00200']),
            'nationality'=>fake()->country,
            'address'=>fake()->address,
            'religion'=>fake()->randomElement(['Chirstian','Catholic','Muslim','Buddhist']),
            'marital_status'=>fake()->randomElement(['Single','Married','Divorced']),
            'course'=>fake()->randomElement(['ICS','BBIT','BCOM','CNS']),
            'intake'=>fake()->randomElement(['January','April']),
            'dob'=>fake()->date,
            'father_name'=>fake()->name,
            'father_email'=>fake()->email,
            'father_tel'=>fake()->randomNumber(8, true),
            'father_occupation'=>fake()->randomElement(['Pastor','CEO','Business Man', 'Hustler']),
            'mother_name'=>fake()->name,
            'mother_email'=>fake()->email,
            'mother_tel'=>fake()->randomNumber(8, true),
            'mother_occupation'=>fake()->randomElement(['Pastor','CEO','Business Man', 'Hustler']),
            'guardian_name'=>fake()->name,
            'guardian_email'=>fake()->email,
            'guardian_tel'=>fake()->randomNumber(8, true),
            'guardian_occupation'=>fake()->randomElement(['Pastor','CEO','Business Man', 'Hustler']),
        ];
    }
}


