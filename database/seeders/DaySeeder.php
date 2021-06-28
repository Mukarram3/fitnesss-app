<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('days')->insert([
            'weekmealcatid'=>1,
            'daynumber'=>1
        ]);
        DB::table('days')->insert([
            'weekmealcatid'=>1,
            'daynumber'=>2
        ]);
        DB::table('days')->insert([
            'weekmealcatid'=>1,
            'daynumber'=>3
        ]);
        DB::table('days')->insert([
            'weekmealcatid'=>1,
            'daynumber'=>4
        ]);
    }
}
