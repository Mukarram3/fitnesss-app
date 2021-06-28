<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class WeekmealcatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weekmealcats')->insert([
            'mealcatid'=>1,
            'planid'=>1,
            'weeknumber'=>1,
        ]);
        DB::table('weekmealcats')->insert([
            'mealcatid'=>1,
            'planid'=>1,
            'weeknumber'=>2,
        ]);
        DB::table('weekmealcats')->insert([
            'mealcatid'=>1,
            'planid'=>1,
            'weeknumber'=>3,
        ]);
        DB::table('weekmealcats')->insert([
            'mealcatid'=>1,
            'planid'=>1,
            'weeknumber'=>4,
        ]);
        DB::table('weekmealcats')->insert([
            'mealcatid'=>1,
            'planid'=>1,
            'weeknumber'=>1,
        ]);
        DB::table('weekmealcats')->insert([
            'mealcatid'=>1,
            'planid'=>1,
            'weeknumber'=>2,
        ]);
    }
}
