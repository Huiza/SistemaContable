<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\cuenta;

class subCuenta extends Model
{
    protected $fillable=['nombre_subcuenta'];

    public function getRouteKeyName()
    {
        return 'id';
    }

    public function cuentas()
    {
        return $this->hasMany(cuenta::class);
    }
}
