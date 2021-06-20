<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cuenta;

class tipoCuenta extends Model
{
    //
    protected $fillable=['nombre_tipo_cuenta'];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function cuentas()
    {
        return $this->hasMany(cuenta::class);
    }
}
