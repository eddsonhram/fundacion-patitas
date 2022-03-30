<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacunas extends Model{
	protected $table = "vacunas";

	protected $fillable = [
		'nombre',
        'create_at',
        'update_at'
	];
}

 ?>