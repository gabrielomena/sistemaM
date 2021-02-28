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
            ["nome"=>'Alvarães',"regionals_id"=>7,"estado_id"=>4,"dados_id"=>1],
            ["nome"=>'Amaturá',"regionals_id"=>1,"estado_id"=>4,"dados_id"=>2],
            ["nome"=>'Anamã',"regionals_id"=>3,"estado_id"=>4,"dados_id"=>3],
            ["nome"=>'Anori',"regionals_id"=>3,"estado_id"=>4,"dados_id"=>4],
            ["nome"=>'Apuí',"regionals_id"=>8,"estado_id"=>4,"dados_id"=>5],
            ["nome"=>'Atalaia do Norte',"regionals_id"=>1,"estado_id"=>4,"dados_id"=>6],
            ["nome"=>'Autazes',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>7],
            ["nome"=>'Barcelos',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>8],
            ["nome"=>'Barreirinha',"regionals_id"=>5,"estado_id"=>4,"dados_id"=>9],
            ["nome"=>'Benjamin Constant',"regionals_id"=>1,"estado_id"=>4,"dados_id"=>10],
            ["nome"=>'Beruri',"regionals_id"=>3,"estado_id"=>4,"dados_id"=>11],
            ["nome"=>'Boa Vista do Ramos',"regionals_id"=>5,"estado_id"=>4,"dados_id"=>12],
            ["nome"=>'Boca do Acre',"regionals_id"=>6,"estado_id"=>4,"dados_id"=>13],
            ["nome"=>'Borba',"regionals_id"=>8,"estado_id"=>4,"dados_id"=>14],
            ["nome"=>'Caapiranga',"regionals_id"=>3,"estado_id"=>4,"dados_id"=>15],
            ["nome"=>'Canutama',"regionals_id"=>6,"estado_id"=>4,"dados_id"=>16],
            ["nome"=>'Carauari',"regionals_id"=>9,"estado_id"=>4,"dados_id"=>17],
            ["nome"=>'Careiro Castanho',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>18],
            ["nome"=>'Careiro da Várzea',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>19],
            ["nome"=>'Coari',"regionals_id"=>3,"estado_id"=>4,"dados_id"=>20],
            ["nome"=>'Codajás',"regionals_id"=>3,"estado_id"=>4,"dados_id"=>21],
            ["nome"=>'Eirunepé',"regionals_id"=>9,"estado_id"=>4,"dados_id"=>22],
            ["nome"=>'Envira',"regionals_id"=>9,"estado_id"=>4,"dados_id"=>23],
            ["nome"=>'Fonte Boa',"regionals_id"=>1,"estado_id"=>4,"dados_id"=>24],
            ["nome"=>'Guajará',"regionals_id"=>9,"estado_id"=>4,"dados_id"=>25],
            ["nome"=>'Humaitá',"regionals_id"=>8,"estado_id"=>4,"dados_id"=>26],
            ["nome"=>'Ipixuna',"regionals_id"=>9,"estado_id"=>4,"dados_id"=>27],
            ["nome"=>'Iranduba',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>28],
            ["nome"=>'Itacoatiara',"regionals_id"=>2,"estado_id"=>4,"dados_id"=>29],
            ["nome"=>'Itamarati',"regionals_id"=>9,"estado_id"=>4,"dados_id"=>30],
            ["nome"=>'Itapiranga',"regionals_id"=>2,"estado_id"=>4,"dados_id"=>31],
            ["nome"=>'Japurá',"regionals_id"=>7,"estado_id"=>4,"dados_id"=>32],
            ["nome"=>'Juruá',"regionals_id"=>7,"estado_id"=>4,"dados_id"=>33],
            ["nome"=>'Jutaí',"regionals_id"=>1,"estado_id"=>4,"dados_id"=>34],
            ["nome"=>'Lábrea',"regionals_id"=>6,"estado_id"=>4,"dados_id"=>35],
            ["nome"=>'Manacapuru',"regionals_id"=>3,"estado_id"=>4,"dados_id"=>36],
            ["nome"=>'Manaquiri',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>37],
            ["nome"=>'Manaus',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>38],
            ["nome"=>'Manicoré',"regionals_id"=>8,"estado_id"=>4,"dados_id"=>39],
            ["nome"=>'Maraã',"regionals_id"=>7,"estado_id"=>4,"dados_id"=>40],
            ["nome"=>'Maués',"regionals_id"=>5,"estado_id"=>4,"dados_id"=>41],
            ["nome"=>'Nhamundá',"regionals_id"=>5,"estado_id"=>4,"dados_id"=>42],
            ["nome"=>'Nova Olinda do Norte',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>43],
            ["nome"=>'Novo Airão',"regionals_id"=>3,"estado_id"=>4,"dados_id"=>44],
            ["nome"=>'Novo Aripuanã',"regionals_id"=>8,"estado_id"=>4,"dados_id"=>45],
            ["nome"=>'Parintins',"regionals_id"=>5,"estado_id"=>4,"dados_id"=>46],
            ["nome"=>'Pauini',"regionals_id"=>6,"estado_id"=>4,"dados_id"=>47],
            ["nome"=>'Presidente Figueiredo',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>48],
            ["nome"=>'Rio Preto da Eva',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>49],
            ["nome"=>'Santa Isabel do Rio Negro',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>50],
            ["nome"=>'Santo Antônio do Içá',"regionals_id"=>1,"estado_id"=>4,"dados_id"=>51],
            ["nome"=>'Silves',"regionals_id"=>2,"estado_id"=>4,"dados_id"=>52],
            ["nome"=>'São Gabriel da Cachoeira',"regionals_id"=>4,"estado_id"=>4,"dados_id"=>53],
            ["nome"=>'São Paulo de Olivença',"regionals_id"=>1,"estado_id"=>4,"dados_id"=>54],
            ["nome"=>'São Sebastião do Uatumã',"regionals_id"=>2,"estado_id"=>4,"dados_id"=>55],
            ["nome"=>'Tabatinga',"regionals_id"=>1,"estado_id"=>4,"dados_id"=>56],
            ["nome"=>'Tapauá',"regionals_id"=>6,"estado_id"=>4,"dados_id"=>57],
            ["nome"=>'Tefé',"regionals_id"=>7,"estado_id"=>4,"dados_id"=>58],
            ["nome"=>'Tonantins',"regionals_id"=>1,"estado_id"=>4,"dados_id"=>59],
            ["nome"=>'Uarini',"regionals_id"=>7,"estado_id"=>4,"dados_id"=>60],
            ["nome"=>'Urucará',"regionals_id"=>2,"estado_id"=>4,"dados_id"=>61],
            ["nome"=>'Urucurituba',"regionals_id"=>2,"estado_id"=>4,"dados_id"=>62]
        ]);
    }
}
