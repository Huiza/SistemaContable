<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\asientoContable;
use App\subCuenta;
use App\tipoCuenta;


class cuenta extends Model
{
	public $incrementing  = false;
    protected $primaryKey = 'codigo';
    /*Colocamos tipo protegidos a todos los atributos*/
    protected $fillable = ['codigo', 'nombre_cuenta'];

    public function getRouteKeyName()
    {
        return 'codigo';
    }
    //
    public function asientoContables()
    {
        return $this->hasMany(asientoContable::class);
    }
    public function subcuenta()
    {
        return $this->belongsTo(subCuenta::class, 'subcuenta_id', 'id');
    }

    public function tipoCuenta()
    {
        return $this->belongsTo(tipoCuenta::class, 'tipo_cuenta_id', 'id');
    }
}
