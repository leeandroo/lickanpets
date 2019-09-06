<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EspecieVariante extends Model
{
    // TABLA
    protected $table = 'especie_variante';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'variante_id',
        'especie_id'
    ];

    // Relationships
    public function especie()
    {
        return $this->belongsTo(Especie::class);
    }

    public function variante()
    {
        return $this->belongsTo(Variante::class);
    }
}
