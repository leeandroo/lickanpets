<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model
{
    // TABLA
    protected $table = 'raza';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre',
        'especie_id'
    ];

    public static function razas($id){
        return Raza::where('especie_id','=',$id)
        ->get();
    }

    public function mascota()
    {
        return $this->hasMany(Mascota::class);
    }

    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }
}
