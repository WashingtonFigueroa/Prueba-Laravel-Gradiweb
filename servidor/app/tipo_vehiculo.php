<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class tipo_vehiculo extends Model
{
    use SoftDeletes;
    protected $table = 'tipo_vehiculos';
    protected $fillable = [
        'tipo',
        'descripcion'
    ];
    protected $dates = ['deleted_at'];
}
