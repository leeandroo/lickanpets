<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascota extends Model
{
    // TABLA
    protected $table = 'mascota';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre',
        'sexo',
        'foto',
        'chip',
        'fecha_nacimiento',
        'especie_id',
        'user_id',
        'raza_id'
    ];

    
    // Relationships    

    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function raza()
    {
        return $this->belongsTo(Raza::class);
    }

}
