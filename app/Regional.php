<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    protected $fillable=['nome','sigla'];

    public function municipio()
    {
        return $this->hasMany(Municipio::class);
    }
    public function autoridade()
    {
        return $this->hasMany(Autoridade::class);
    }
}
