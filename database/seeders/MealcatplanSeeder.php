<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MealcatplanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mealcatplans')->insert([
            'mealcat_id'=>1,
            'price'=>10,
            'duration'=>6,
            'description'=>'Billed Monthly(6M)',
        ]);
        DB::table('mealcatplans')->insert([
            'mealcat_id'=>1,
            'price'=>40,
            'duration'=>8,
            'description'=>'Billed Monthly',
        ]);
        DB::table('mealcatplans')->insert([
            'mealcat_id'=>2,
            'price'=>20,
            'duration'=>40,
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris ',
        ]);
    }
}
