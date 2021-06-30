<?php

use Illuminate\Database\Seeder;
Use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            [
                'name' => 'L G TV',
                'price' => '15999',
                'description' => 'test description lorem spum do it work test description',
                'category' => 'tv'
            ],
            [
                 'name' => 'Nokia mobile',
                 'price' => '7000',
                 'description' => 'test description lorem spum do it work test description',
                 'category' => 'mobile'
            ],
            [
                 'name' => 'I phone',
                 'price' => '83599',
                 'description' => 'test description lorem spum do it work test description',
                 'category' => 'mobile'
            ],
            [
                 'name' => 'LED',
                 'price' => '83599',
                 'description' => 'test description lorem spum do it work test description',
                 'category' => 'tv'
            ]
        ]);
    }
}
