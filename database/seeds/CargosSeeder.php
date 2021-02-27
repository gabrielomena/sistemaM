<?php

use Illuminate\Database\Seeder;

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
           ["cargo"=>'Prefeito'],
           ["cargo"=>'Vice Prefeito'],
           ["cargo"=>'Vereador(a)'],
           ["cargo"=>'Secretário(a) de Saúde'],
           ["cargo"=>'Coordernador(a)  de Atenção Básica'],
           ["cargo"=>'Presidente do Conselho Municipal de Saúde'],
           ["cargo"=>'Coordernador(a) de Vigilância em Saúde'],
           ["cargo"=>'Coordernador(a)  de Vigilância Sanitária'],
           ["cargo"=>'Coordernador(a)  de Vigilância Ambiental'],
           ["cargo"=>'Coordernador(a)  de Zoonoses'],
           ["cargo"=>'Gerente de Endemias'],
           ["cargo"=>'Diretor(a) Geral'],
           ["cargo"=>'Gerente Administrativo e Financeiro'],
           ["cargo"=>'Gerente de Enfermagem'],
           ["cargo"=>'Diretor(a) Clínico']
        ]);
    }
}
