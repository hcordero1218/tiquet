<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estadio extends Model
{
    protected $table = 'estadio';

    protected $primaryKey = 'idestadio';

	protected $fillable = ['nombre_estadio', 'capacidad_estadio'];

	public $timestamps = false;

	public function localidad(){
		return $this->hasMany('App\Localidad', 'estadio_idestadio');
	}
}
