<?php

use Illuminate\Database\Seeder;

class AnoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anos')->insert([
            ["ano"=>'2015'],
            ["ano"=>'2016'],
            ["ano"=>'2017'],
            ["ano"=>'2018'],
            ["ano"=>'2019'],
            ["ano"=>'2020'],
            ["ano"=>'2021'],
            ["ano"=>'2022'],
            ["ano"=>'2023'],
            ["ano"=>'2024'],
            ["ano"=>'2025']
        ]);
    }
}
