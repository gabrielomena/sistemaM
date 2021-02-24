<?php

use Illuminate\Database\Seeder;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            ["nome"=>'Alvarães'],
            ["nome"=>'Amaturá'],
            ["nome"=>'Anamã'],
            ["nome"=>'Anori'],
            ["nome"=>'Apuí'],
            ["nome"=>'Atalaia do Norte'],
            ["nome"=>'Autazes'],
            ["nome"=>'Barcelos'],
            ["nome"=>'Barreirinha'],
            ["nome"=>'Benjamin Constant'],
            ["nome"=>'Beruri'],
            ["nome"=>'Boa Vista do Ramos'],
            ["nome"=>'Boca do Acre'],
            ["nome"=>'Borba'],
            ["nome"=>'Caapiranga'],
            ["nome"=>'Canutama'],
            ["nome"=>'Carauari'],
            ["nome"=>'Careiro'],
            ["nome"=>'Careiro da Várzea'],
            ["nome"=>'Coari'],
            ["nome"=>'Codajás'],
            ["nome"=>'Eirunepé'],
            ["nome"=>'Envira'],
            ["nome"=>'Fonte Boa'],
            ["nome"=>'Guajará'],
            ["nome"=>'Humaitá'],
            ["nome"=>'Ipixuna'],
            ["nome"=>'Iranduba'],
            ["nome"=>'Itacoatiara'],
            ["nome"=>'Itamarati'],
            ["nome"=>'Itapiranga'],
            ["nome"=>'Japurá'],
            ["nome"=>'Juruá'],
            ["nome"=>'Jutaí'],
            ["nome"=>'Lábrea'],
            ["nome"=>'Manacapuru'],
            ["nome"=>'Manaquiri'],
            ["nome"=>'Manaus'],
            ["nome"=>'Manicoré'],
            ["nome"=>'Maraã'],
            ["nome"=>'Maués'],
            ["nome"=>'Nhamundá'],
            ["nome"=>'Nova Olinda do Norte'],
            ["nome"=>'Novo Airão'],
            ["nome"=>'Novo Aripuanã'],
            ["nome"=>'Parintins'],
            ["nome"=>'Pauini'],
            ["nome"=>'Presidente Figueiredo'],
            ["nome"=>'Rio Preto da Eva'],
            ["nome"=>'Santa Isabel do Rio Negro'],
            ["nome"=>'Santo Antônio do Içá'],
            ["nome"=>'Silves'],
            ["nome"=>'São Gabriel da Cachoeira'],
            ["nome"=>'São Paulo de Olivença'],
            ["nome"=>'São Sebastião do Uatumã'],
            ["nome"=>'Tabatinga'],
            ["nome"=>'Tapauá'],
            ["nome"=>'Tefé'],
            ["nome"=>'Tonantins'],
            ["nome"=>'Uarini'],
            ["nome"=>'Urucará'],
            ["nome"=>'Urucurituba']
        ]);
    }
}
