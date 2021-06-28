<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Mukarram',
            'email'=>'mukarram123786@gmail.com',
            'password'=> Hash::make('m12345'),
            'address'=>'Street No 8',
            'city'=>'sargodha',
            'Mobile'=>'03066703820',
            'Image'=>'60c080a5150d1.jpeg',
            'country'=>'Pakistan',
            'state'=>'Punjab',
            'dob'=>'1999-12-14',
            'height'=>'5',
            'weight'=>'55',
            'gender'=>'male'
        ]);
    }
}
