<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    public function autoridades()
    {
        return $this->hasMany(Autoridade::class);
    }
}
