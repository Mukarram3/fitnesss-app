<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'title'=>'meal category',
            'image'=>'60c080cd12945.jpeg'
        ]);
        DB::table('categories')->insert([
            'title'=>'Workout',
            'image'=>'60c080cd12945.jpeg'
        ]);
    }
}
