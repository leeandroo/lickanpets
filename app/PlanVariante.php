<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlanVariante extends Model
{
    // TABLA
    protected $table = 'plan_variante';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'plan_id',
        'variante_id',
        'cantidad'
    ];

    // Relationships
    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }

    public function variante()
    {
        return $this->belongsTo(Variante::class);
    }


}
