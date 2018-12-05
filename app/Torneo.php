<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Torneo extends Model
{
    protected $table = 'torneo';

    protected $primaryKey = 'idtorneo';

	protected $fillable = ['nombre_torneo', 'img_torneo'];

	public $timestamps = false;

	public function producto(){
		return $this->hasMany('App\Producto','torneo_idtorneo');
	}
}
