<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trabajador extends Model{
	protected $table = "trabajador";

	protected $fillable = [
		'cedula',
        'nombre',
        'edad',
        'direccion',
        'rol',
        'create_at',
        'update_at'

	];
}

 ?>