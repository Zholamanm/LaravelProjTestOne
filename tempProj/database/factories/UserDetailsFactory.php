<?php

namespace Database\Factories;

use App\Models\UserDetails;
use App\Models\UserModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserDetails>
 */
class UserDetailsFactory extends Factory
{
    protected $model = UserDetails::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_model_id' => UserModel::factory(),
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'citizenship' => $this->faker->country,
            'address' => $this->faker->address,
            'birth_date' => $this->faker->date($format = 'Y-m-d', $max = '2000-01-01'), // дата рождения будет раньше 2000 года
            'mob_phone' => $this->faker->phoneNumber,
            'job_title' => $this->faker->jobTitle,
            'postcode' => $this->faker->postcode,
        ];
    }
}
