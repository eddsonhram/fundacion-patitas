<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historial extends Model{
	protected $table = "historial";

	protected $fillable = [
		'trabajador_id',
        'vacunas_id',
        'animal_id',
        'evolucion',
        'cuidados',
        'create_at',
        'update_at'

	];
}

 ?>