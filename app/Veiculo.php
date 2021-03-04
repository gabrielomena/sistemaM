<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    protected $fillable=['hospital_id','administrativo','ambulancia_terrestre','ambulancia_fluvial','existente','funcional'];

    public function hospital()
    {
        return $this->hasMany('App\hospital','hospital_id');
    }
}
