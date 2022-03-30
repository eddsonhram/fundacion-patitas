<?php use App\Models\Dueno;
use App\Models\Animal;
use App\Models\Trabajador;
use App\Http\Controllers\DuenosControl; ?>

<h1> Registro de Dueños</h1>

<form method="POST" action="/dueno">

	<div>
		<label>Animal</label>
		<select name="animal_id">
			<?php  foreach($lista_animales as $item){?>
			<option value="{{ $item->codigo }}">{{ $item->nombre }}</option>
			<?php } ?>
		</select>
	</div>
	<div>
		<label>Supervisor</label>
		<select name="trabajador_id">
			<?php foreach($lista_trabajadores as $item1){?>
			<option value="{{ $item1->cedula }}">{{ $item1->nombre }}</option>
			<?php } ?>
	</div>
	<div>
		<label>Cedula</label>
		<input type="text" name="cedula"/>
	</div>
	<div>
		<label>Nombre</label>
		<input type="text" name="nombre"/>
	</div>
	<div>
		<label>Edad</label>
		<input type="text" name="edad"/>
	</div>
	<div>
		<label>Direccion</label>
		<input type="text" name="direccion"/>
	</div>

	<div>
		<button type="submit">Guardar</button>
	</div>
</form>