<?php

namespace Database\Factories;
use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;
class DepartmentFactory extends Factory
{
    protected $model = Department::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = FakerFactory::create();
        return [
            'name' => $faker->company,       
            'created_at' => now(),
        ];
    }
    
}
