<?php

use Illuminate\Database\Seeder;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidos')->insert([
            ["sigla"=>'PROS'],
            ["sigla"=>'PTN'],
            ["sigla"=>'SD'],
            ["sigla"=>'PV'],
            ["sigla"=>'PV'],
            ["sigla"=>'PSB'],
            ["sigla"=>'PSD'],
            ["sigla"=>'PC DO B'],
            ["sigla"=>'DEM'],
            ["sigla"=>'PRP']
        ]);
    }
}
