<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{
    // TABLA
    protected $table = 'servicio';

    // protected $primaryKey = 'idServicio';

    // ¿La tabla tiene las columnas "created_at" y "updated_at" para que laravel las trabaje automáticamente?

    public $timestamps = false;

    // Los campos que se pueden editar en la bd / tabla
    protected $fillable = ['id','nombre','minimo','maximo'];

    // ¿Hay campos que no deban escribirse?
    // protected $guarded = ['algun_campo'];

    // ¿Hay campos que no deben verse en las consultas?
    // protected $hidden = ['algun_campo'];

    // ¿Hay columnas que sean fechas, fechas & horas en la tabla?
    // protected $dates = ['algun_campo'];

    // RELATIONSHIPS
    public function variante()
    {
        return $this->hasMany(Variante::class);
    }
}
