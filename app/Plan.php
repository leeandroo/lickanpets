<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    // TABLA
    protected $table = 'plan';

    public $timestamps = true;

    protected $fillable = [
        'id',
        'user_id',
        'mascota_id',
        'total'
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mascota()
    {
        return $this->belongsTo(Mascota::class);
    }

    public function plan_variante()
    {
        return $this->hasMany(PlanVariante::class);
    }
}
