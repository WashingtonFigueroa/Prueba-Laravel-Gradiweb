<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class propietario extends Model
{
    use SoftDeletes;
    protected $table = 'propietarios';
    protected $fillable = [
        'cedula',
        'nombres'
    ];
    protected $dates = ['deleted_at'];
}
