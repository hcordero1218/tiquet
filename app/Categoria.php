<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categoria_producto';

    protected $primaryKey = 'idcategoria_producto';

	protected $fillable = ['nombre_cat_producto'];

	public $timestamps = false;

	public function producto(){
		return $this->hasMany('App\Producto', 'categoria_producto_idcategoria_producto');
	}
}
