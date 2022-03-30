<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dueno extends Model{
	protected $table = "dueno";

	protected $fillable = [
		'trabajador_id',
		'animal_id',
		'cedula',
		'nombre',
		'edad',
		'direccion',
        'create_at',
        'update_at'

	];
}

 ?>