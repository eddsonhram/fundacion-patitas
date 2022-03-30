<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Especies extends Model{
	protected $table = "especie";

	protected $fillable = [
		'nombre',
        'create_at',
        'update_at'

	];
}

 ?>