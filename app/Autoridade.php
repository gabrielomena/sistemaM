<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridade extends Model
{
    protected $fillable=['nome','cargo','tipo_id','partido_id','liderCamara','municipio_id','email','tel'];

    public function tipo()
    {
        return $this->belongsTo('App\TipoPoliticos','tipo_id');
    }

    public function partido()
    {
        return $this->belongsTo('App\Partido','partido_id');
    }

    public function municipio()
    {
        return $this->belongsTo('App\Municipio','municipio_id');
    }
}
