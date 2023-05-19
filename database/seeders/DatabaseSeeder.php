<?php

namespace Database\Seeders;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Designation;
use App\Models\Department;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        Department::factory()->count(5)->create();
        Designation::factory()->count(5)->create();
        User::factory()->count(4)->create();  
      

       
    }
}
