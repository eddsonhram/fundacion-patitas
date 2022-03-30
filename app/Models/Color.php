<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model{
	protected $table = "color";

	protected $fillable = [
		'nombre',
        'create_at',
        'update_at'

];
}

 ?>