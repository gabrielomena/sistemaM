<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    protected $fillable=['nome','media_internacao_dia','media_internacao_mes','municipio_id'];


    public function municipio()
    {
        return $this->belongsTo('App\Municipio','municipio_id');
    }

    public function leito()
    {
        return $this->belongsTo('App\Leito');
    }

    public function veiculo()
    {
        return $this->hasMany('App\Veiculos');
    }

    public function exame()
    {
        return $this->hasMany('App\Exame');
    }

    public function anos()
    {
        return $this->hasMany('App\Ano');
    }
}
