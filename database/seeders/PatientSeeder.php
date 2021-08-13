<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('patients')->insert([
            'name' => 'ali',
            'email' => 'ali@gmail.com',
            'address' => 'street 7',
            'password' => Hash::make('a12345'),
            'gender' => 'male',
            'dob' => '2004-03-05',
            'phone' => '123456789',
            'status' => 0,
        ]);
    }
}
