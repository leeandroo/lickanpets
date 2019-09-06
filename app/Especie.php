<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Especie extends Model
{
    // TABLA
    protected $table = 'especie';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre'
    ];

    // Relationships
    public function variante()
    {
        return $this->belongsToMany(Variante::class, 'especie_variante', 'variante_id', 'especie_id');
    }

    public function especie_variante()
    {
        return $this->hasMany(EspecieVariante::class);
    }
    
}
