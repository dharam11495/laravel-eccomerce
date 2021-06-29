<?php

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;
Use Illuminate\Support\Facades\Hash;

class User_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            "name" => "Dharam veer",
            "email" => "dharam11495@gmail.com",
            "password" => Hash::make('12345')
        ]);
    }
}
