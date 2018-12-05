<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'producto';

    protected $primaryKey = 'idproducto';

	protected $fillable = ['nombre_producto', 'descripcion', 'slug', 'precio', 'descuento', 'fecha', 'hora', 'categoria_producto_idcategoria_producto', 'estado_producto_idestado_producto', 'torneo_idtorneo'];

	public function categoria(){
		return $this->belongsTo('App\Categoria', 'categoria_producto_idcategoria_producto', 'idcategoria_producto');
	}

	public function estado(){
		return $this->belongsTo('App\Estado','estado_producto_idestado_producto','idestado_producto');
	}

	public function torneo(){
		return $this->belongsTo('App\Torneo','torneo_idtorneo','idtorneo');
	}
}


