<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DoctorratingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctorratings')->insert([

            'doc_id' => 1,
            'pat_id' => 1,
            'rating' => 4,
            'reviews' => "Good doctor and three years experience in specialist",

        ]);
    }
}
