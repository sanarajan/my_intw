<?php

namespace Database\Factories;
use App\Models\Designation;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

class DesignationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     */
    protected $model = Designation::class;
    public function definition()
    {
        $faker = FakerFactory::create();
        return [
            'name' => $faker->jobTitle,            
            'created_at' => now(),
        ];
    }
}
