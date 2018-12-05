<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    protected $table = 'estado_producto';

    protected $primaryKey = 'idestado_producto';

	protected $fillable = ['nombre_est_producto'];

	public $timestamps = false;

	public function producto(){
		return $this->hasMany('App\Producto','estado_producto_idestado_producto');
	}
}
