<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MealcatweekSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mealcatweeks')->insert([
            'mealcatid'=>1,
            'mealcatplanid'=>1,
            'weeknumber'=>1,
        ]);
        DB::table('mealcatweeks')->insert([
            'mealcatid'=>1,
            'mealcatplanid'=>1,
            'weeknumber'=>2,
        ]);
        DB::table('mealcatweeks')->insert([
            'mealcatid'=>1,
            'mealcatplanid'=>1,
            'weeknumber'=>3,
        ]);
        DB::table('mealcatweeks')->insert([
            'mealcatid'=>1,
            'mealcatplanid'=>1,
            'weeknumber'=>4,
        ]);
        DB::table('mealcatweeks')->insert([
            'mealcatid'=>2,
            'mealcatplanid'=>1,
            'weeknumber'=>1,
        ]);
        DB::table('mealcatweeks')->insert([
            'mealcatid'=>2,
            'mealcatplanid'=>1,
            'weeknumber'=>2,
        ]);
    }
}
