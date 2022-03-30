<h1> Registro de trabajadores la Fundacion</h1>

<form method="POST" action="/trabajador">

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
		<label>Profesion</label>
		<select name="rol">
			<option value="Veterinario">Veterinario</option>
			<option value="Cuidador">Cuidador</option>
			<option value="Entrenador">Entrenador</option>
			<option value="Personal Administrativo">Personal Administrativo</option>
		</select>
	</div>
	<div>
		<button type="submit">Guardar</button>
	</div>
</form>