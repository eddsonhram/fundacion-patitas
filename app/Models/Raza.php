<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Raza extends Model{
	protected $table = "raza";

	protected $fillable = [
		'nombre',
        'create_at',
        'update_at'

	];
}

 ?>