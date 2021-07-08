<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MealdaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mealdays')->insert([
            'mealcatid' => 2,
            'mealcatplanid' =>1,
            'mealcatweekid'=>1,
            'daynumber'=>1
        ]);
        DB::table('mealdays')->insert([
            'mealcatid' => 2,
            'mealcatplanid' =>1,
            'mealcatweekid'=>1,
            'daynumber'=>2
        ]);
        DB::table('mealdays')->insert([
            'mealcatid' => 2,
            'mealcatplanid' =>1,
            'mealcatweekid'=>1,
            'daynumber'=>3
        ]);
        DB::table('mealdays')->insert([
            'mealcatid' => 2,
            'mealcatplanid' =>2,
            'mealcatweekid'=>1,
            'daynumber'=>4
        ]);
    }
}
