<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctors')->insert([

            'cat_id' => 1,
            'name' => 'chand',
            'email' => 'chand@gmail.com',
            'address' => 'street 7',
            'password' => Hash::make('c12345'),
            'gender' => 'male',
            'dob' => '2004-03-05',
            'phone' => '123456789',
            'status' => 0,
            'qualification' => 'MBBS',
            'experience' => 5,
            'fee' => 1500,

        ]);

        DB::table('doctors')->insert([

            'cat_id' => 1,
            'name' => 'ali',
            'email' => 'ali@gmail.com',
            'address' => 'street 7',
            'password' => Hash::make('a12345'),
            'gender' => 'male',
            'dob' => '2004-03-05',
            'phone' => '123456789',
            'status' => 1,
            'qualification' => 'MBBS',
            'experience' => 5,
            'fee' => 1500,

        ]);

    }
}
