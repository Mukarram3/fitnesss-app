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

        $this->call([

            Userseeder::class,
            CategorySeeder::class,
            DoctorSeeder::class,
            PatientSeeder::class,
            DoctorratingSeeder::class,

       ]);

    }
}
