<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\HasApiTokens;
class Usuarios extends Model{
	use HasApiTokens;
	protected $table = "usuarios";

	protected $fillable = [
		'nombre',
        'email',
        'pass',
        'create_at',
        'update_at'
];
}
 ?>