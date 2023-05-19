<?php

namespace Database\Factories;
use App\Models\User;
use App\Models\Designation;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create(); 
        return [
            'name' => $faker->name,
            'fk_department' => Department::inRandomOrder()->first()->id,
            'fk_designation' => Designation::inRandomOrder()->first()->id,
            'phone_number' => $faker->phoneNumber,
            'created_at' => now(),
        ];
    }
}
