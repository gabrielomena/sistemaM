<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    public function autoridades()
    {
        return $this->hasMany(Autoridade::class);
   }
}
