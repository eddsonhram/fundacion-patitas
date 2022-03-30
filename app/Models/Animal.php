<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model{
	protected $table = "animal";

	protected $fillable = [

		'raza_id',
		'color_id',
		'especie_id',
		'dueno_id',
		'nombre',
		'edad',
		'f_nac',
		'sitio',
		'rescate',
        'create_at',
        'update_at'
	];
}

 ?>