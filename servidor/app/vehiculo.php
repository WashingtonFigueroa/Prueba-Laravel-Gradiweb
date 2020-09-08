<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class vehiculo extends Model
{
    use SoftDeletes;
    protected $table = 'vehiculos';
    protected $fillable = [
        'propietario_id',
        'tipo_vehiculo_id',
        'placa',
        'marca'
    ];
    protected $dates = ['deleted_at'];

    protected $appends = ['propietario','tipo_vehiculo'];

    public function getPropietarioAttribute()
    {
        return propietario::find($this->propietario_id);
    }
    public function getTipoVehiculoAttribute()
    {
        return tipo_vehiculo::find($this->tipo_vehiculo_id);
    }

}
