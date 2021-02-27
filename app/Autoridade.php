<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autoridade extends Model
{
    protected $fillable=['nome','cargo','cargo_id','partido_id','liderCamara','municipio_id','email','tel'];

    public function cargo()
    {
        return $this->belongsTo('App\Cargo','cargo_id');
    }

    public function partido()
    {
        return $this->belongsTo('App\Partido','partido_id');
    }

    public function municipio()
    {
        return $this->belongsTo('App\Municipio','municipio_id');
    }
    public function regional()
    {
        return $this->belongsTo('App\Regional','regional_id');
    }
}
