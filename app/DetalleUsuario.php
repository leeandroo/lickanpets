<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleUsuario extends Model
{
    protected $table = "detalle_user";

    public $timestamps = false;

    protected $fillable =[
        'user_id',
        'telefono_1',
        'telefono_2',
        'direccion', 

    ];

    protected $guarded =[

    ];
}
