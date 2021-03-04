<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leito extends Model
{
    protected $fillable=['hospital_id','leito_clinico','leito_cirurgico','leito_obstetrico','leito_pediatrico','leito_outro','suporte_ventilatorio','uci_adulto','uci_pediatrico'];

    public function hospital()
    {
        return $this->hasMany('App\Hospital','hospital_id');
    }
}
