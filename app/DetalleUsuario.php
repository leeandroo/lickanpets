<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleUsuario extends Model
{
    protected $table = "detalle_user";
    protected $primaryKey = "iduserdetalle";
    public $timestamps = false;

    protected $fillable =[
        'iduser',
        'telefono1',
        'telefono2',
        'direccion', 

    ];

    protected $guarded =[

    ];
}
