<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $fillable=['nome','regional_id'];

    public function autoridade()
    {
        return $this->hasMany(Autoridade::class);
    }

    public function regional()
    {
        return $this->belongsTo('App\Regional','regionals_id');
    }

    public function dados()
    {
        return $this->belongsTo('App\Dados_municipios','dados_id');
    }

}
