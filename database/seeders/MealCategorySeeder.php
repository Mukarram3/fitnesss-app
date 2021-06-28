<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class MealCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mealcategories')->insert([
            'cat_id'=>1,
            'title'=>'Weight-Gain Diet Plan',
            'image'=>'60c0835c3e027.jpeg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'type'=>'paid'
        ]);
        DB::table('mealcategories')->insert([
            'cat_id'=>1,
            'title'=>'Weight Loss',
            'image'=>'60c08f4b53edb.jpg',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            'type'=>'paid'
        ]);
    }
}
