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
            ["sigla"=>'PROS',
                "descricao"=>'Partido Republicano da Ordem Social'
                ],
            ["sigla"=>'PTN',
                "descricao"=>''
                ],
            ["sigla"=>'SD',
                "descricao"=>''
                ],
            ["sigla"=>'PV',
                "descricao"=>'Partido Verde'
                ],
            ["sigla"=>'PSB',
                "descricao"=>'Partido Socialista Brasileiro'
                ],
            ["sigla"=>'PSD',
                "descricao"=>''
                ],
            ["sigla"=>'PC DO B',
                "descricao"=>'Partido Comunista do Brasil'
                ],
            ["sigla"=>'DEM',
                "descricao"=>'Democratas'
                ],
            ["sigla"=>'PRP',
                "descricao"=>'Partido Republicano Progressista'
                ],
            ["sigla"=>'Sem Partido',
                "descricao"=>'Sem Partido'
            ]
        ]);
    }
}
