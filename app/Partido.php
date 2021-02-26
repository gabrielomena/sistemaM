<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partido extends Model
{
protected $fillable=['sigla','descricao'];

    public function autoridades()
    {
        return $this->hasMany(Autoridade::class);
    }
}
