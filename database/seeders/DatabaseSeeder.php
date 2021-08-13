<?php

namespace Database\Seeders;

use App\Models\category;
use App\Models\doctor;
use App\Models\doctorrating;
use App\Models\weekmealcat;
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
        //  \App\Models\User::factory(1)->create();
        //  \App\Models\Category::factory(1)->create();
        //  \App\Models\Mealcategory::factory(5)->create();
        //  \App\Models\Meal::factory(10)->create();
        //  \App\Models\Workout::factory(5)->create();
        //  \App\Models\Exercise::factory(10)->create();
        $this->call([

            Userseeder::class,
            CategorySeeder::class,
            DoctorSeeder::class,
            PatientSeeder::class,
            DoctorratingSeeder::class,

       ]);

    }
}
