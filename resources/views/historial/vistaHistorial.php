<?php
use App\Models\Animal;
use App\Models\Trabajador;
use App\Models\Vacunas;
use App\Http\Controllers\HistorialControl; ?>


<h1> Registro de Historial</h1>

<form method="POST" action="/historial">

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
		<label>Vacunas</label>
		<select name="vacunas_id">
			<?php foreach($lista_vacunas as $item2){?>
			<option value="{{ $item2->id }}">{{ $item2->nombre }}</option>
			<?php } ?>
	</div>
	<div>
		<label>Evolucion</label>
		<input type="text" name="evolucion"/>
	</div>
	<div>
		<label>Cuidados</label>
		<input type="text" name="cuidados"/>
	</div>
	<div>
		<button type="submit">Guardar</button>
	</div>
</form>