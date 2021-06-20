<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\libroDiario;
use App\cuenta;


class asientoContable extends Model
{
   protected $fillable=['importe_debe','importe_haber'];

   public function getRouteKeyName()
    {
        return 'id';
    }

    public function libroDiario()
    {
        return $this->belongsTo(libroDiario::class, 'libro_diario_id', 'id');
    }

    public function cuentaDebe()
    {
        return $this->belongsTo(cuenta::class, 'cuenta_debe_id', 'codigo');
    }

    public function cuentaHaber()
    {
        return $this->belongsTo(cuenta::class, 'cuenta_haber_id', 'codigo');
    }
}
