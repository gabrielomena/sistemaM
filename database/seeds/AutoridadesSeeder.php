<?php

use Illuminate\Database\Seeder;

class AutoridadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autoridades')->insert([
            ["nome"=>'Antonio Rock Longo',
                "tipo_id"=>1,
                "partido_id"=>8,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>"prefeituradeapui@hotmail.com",
                "tel"=>'(97) 99155-3968'
            ],["nome"=>'Marcos Antonio Lise',
                "tipo_id"=>2,
                "partido_id"=>9,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Bruno Jose de Morais',
                "tipo_id"=>3,
                "partido_id"=>1,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Flaviano Carvalho de Souza',
                "tipo_id"=>3,
                "partido_id"=>2,
                "municipio_id"=>5,
                "liderCamara"=>true,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Gilberto Vizolli',
                "tipo_id"=>3,
                "partido_id"=>3,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Roberto Willian Braga Gomes',
                "tipo_id"=>3,
                "partido_id"=>4,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Jose Ribamar Araujo',
                "tipo_id"=>3,
                "partido_id"=>4,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Antonio Carlos Moises Franco',
                "tipo_id"=>3,
                "partido_id"=>5,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Carlos ALves da Silva',
                "tipo_id"=>3,
                "partido_id"=>6,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Gevan Pires Barbosa',
                "tipo_id"=>3,
                "partido_id"=>7,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Lexisandra Mara Pascoal',
                "tipo_id"=>4,
                "partido_id"=>10,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'lexisandrapui@hotmail.com ',
                "tel"=>'(97) 99158-6011'
            ],["nome"=>'Isleia Gomes de Farias',
                "tipo_id"=>5,
                "partido_id"=>10,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>'(97) 98808-2331'
            ],["nome"=>'Kênia Macedo',
                "tipo_id"=>6,
                "partido_id"=>10,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Isileia Gomes',
                "tipo_id"=>7,
                "partido_id"=>10,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>'(97) 98808 - 2331'
            ],["nome"=>'Emerson Curtareli',
                "tipo_id"=>8,
                "partido_id"=>10,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Maria Magnolia Rodrigues da Silva',
                "tipo_id"=>10,
                "partido_id"=>10,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Pedro Paulo Navarine',
                "tipo_id"=>11,
                "partido_id"=>10,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>''
            ],["nome"=>'Rosangela Motter Detoni',
                "tipo_id"=>12,
                "partido_id"=>10,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'rmdetoni@hotmail.com',
                "tel"=>'(97) 99153-7586'
            ],["nome"=>'Ivani Tironi Saatkamp',
                "tipo_id"=>13,
                "partido_id"=>10,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'ivatironi.saatkamp@gmail.com',
                "tel"=>'(97) 99153-7586'
            ],["nome"=>'Gleice Kelly de Lima',
                "tipo_id"=>14,
                "partido_id"=>10,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'gleicekellydelima@gmail.com',
                "tel"=>'(97) 99153-1553'
            ],["nome"=>'André Feliciano Mattes',
                "tipo_id"=>15,
                "partido_id"=>10,
                "municipio_id"=>5,
                "liderCamara"=>false,
                "email"=>'',
                "tel"=>'(93) 99355-2835 / (93) 99101-9740'
            ]
        ]);
    }
}
