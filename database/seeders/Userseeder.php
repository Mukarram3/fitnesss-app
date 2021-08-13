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
            'phone'=>'0306-6703820',
            'gender'=>'male',
            'dob'=>'1999-12-14',
            'type'=>'admin',
            'status'=> 1,
        ]);
    }
}
