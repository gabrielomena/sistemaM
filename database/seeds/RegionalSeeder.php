<?php

use Illuminate\Database\Seeder;

class RegionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regionals')->insert([
            ["nome"=>"Alto Solimões",
            "sigla"=>"AS"],
            ["nome"=>"Médio Amazonas",
            "sigla"=>"MA"],
            ["nome"=>"Rio Negro e Solimões",
            "sigla"=>"RNS"],
            ["nome"=>"Manaus, Entorno e Alto Rio Negro",
            "sigla"=>"EntARN"],
            ["nome"=>"Baixo Amazonas",
            "sigla"=>"BA"],
            ["nome"=>"Purus",
            "sigla"=>"P"],
            ["nome"=>"Triângulo",
            "sigla"=>"T"],
            ["nome"=>"Rio Madeira",
            "sigla"=>"RM"],
            ["nome"=>"Juruá",
            "sigla"=>"J"]
        ]);
    }
}
