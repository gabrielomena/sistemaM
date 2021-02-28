<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dados_municipios extends Model
{
    protected $fillable=['area_territorial','populacao_estimada','densidade_demografica',
        'pib_percapita','idh'];

    public function municipio()
    {
        return $this->belongsTo(Municipio::class);
   }
}
