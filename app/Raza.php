<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    

    public function mascota()
    {
        return $this->hasMany(Mascota::class);
    }
}
