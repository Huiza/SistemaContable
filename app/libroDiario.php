<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\asientoContable;

class libroDiario extends Model
{
	protected $fillable=['fecha','concepto'];
	

	public function getRouteKeyName()
    {
        return 'id';
    }
    //
    public function asientoContables()
    {
        return $this->hasMany(asientoContable::class);
    }

}
