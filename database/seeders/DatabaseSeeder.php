<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(1)->create();
         \App\Models\Category::factory(1)->create();
        //  \App\Models\Mealcategory::factory(5)->create();
        //  \App\Models\Meal::factory(10)->create();
        //  \App\Models\Workout::factory(5)->create();
        //  \App\Models\Exercise::factory(10)->create();

        
    }
}