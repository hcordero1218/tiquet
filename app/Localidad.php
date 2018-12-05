<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidad extends Model
{
    protected $table = 'localidad';

    protected $primaryKey = 'idlocalidad';

	protected $fillable = ['nombre_localidad', 'capacidad_localidad', 'estadio_idestadio'];

	public $timestamps = false;

	public function estadio(){
		return $this->belongsTo('App\Estadio', 'estadio_idestadio', 'idlocalidad');
	}

	public static function localidades( $estadio_idestadio){
		return Localidad::where('estadio_idestadio','=',$estadio_idestadio)->get();

	}
}
