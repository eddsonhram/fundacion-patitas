<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/


//$router->get('/registro', 'usuarioControl@index');
//$router->post('/registro', 'usuarioControl@store');

//$router->group(['middleware' => 'auth'], function () use ($router) {
$router->get('/', function () use ($router) {
  return $router->app->version();
});


$router->group(["prefix" =>"/v1"], function () use ($router){
	$router->group(["prefix" =>"/user"], function () use ($router){

		$router->get('/registro', 'usuarioControl@crearUsuario');
		$router->get('/lista', 'usuarioControl@obtenerUsuarios');
		$router->put('/{id}', 'usuarioControl@actualizarUsuario');
		$router->delete('/{id}', 'usuarioControl@borrarUsuario');

	});
});

$router->group(["prefix" =>"/v1"], function () use ($router){
	$router->group(["prefix" =>"/vacuna"], function () use ($router){

		$router->get('/registro', 'VacunasControl@crearVacuna');
		$router->get('/lista', 'VacunasControl@obtenerVacuna');
		$router->put('/{id}', 'VacunasControl@actualizarVacuna');
		$router->delete('/{id}', 'VacunasControl@borrarVacuna');

	});
});

$router->group(["prefix" =>"/v1"], function () use ($router){
	$router->group(["prefix" =>"/trabajador"], function () use ($router){

		$router->get('/registro', 'TrabajadoresControl@crearTrabajador');
		$router->get('/lista', 'TrabajadoresControl@obtenerTrabajador');
		$router->put('/{id}', 'TrabajadoresControl@actualizarTrabajador');
		$router->delete('/{id}', 'TrabajadoresControl@borrarTrabajador');

	});
});

$router->group(["prefix" =>"/v1"], function () use ($router){
	$router->group(["prefix" =>"/raza"], function () use ($router){

		$router->get('/registro', 'RazaControl@crearRaza');
		$router->get('/lista', 'RazaControl@obtenerRaza');
		$router->put('/{id}', 'RazaControl@actualizarRaza');
		$router->delete('/{id}', 'RazaControl@borrarRaza');

	});
});

$router->group(["prefix" =>"/v1"], function () use ($router){
	$router->group(["prefix" =>"/animal"], function () use ($router){

		$router->get('/registro', 'AnimalControl@crearAnimal');
		$router->get('/lista', 'AnimalControl@obtenerAnimal');
		$router->put('/{id}', 'AnimalControl@actualizarAnimal');
		$router->delete('/{id}', 'AnimalControl@borrarAnimal');

	});
});

$router->group(["prefix" =>"/v1"], function () use ($router){
	$router->group(["prefix" =>"/color"], function () use ($router){

		$router->get('/registro', 'ColorControl@crearColor');
		$router->get('/lista', 'ColorControl@obtenerColor');
		$router->put('/{id}', 'ColorControl@actualizarColor');
		$router->delete('/{id}', 'ColorControl@borrarColor');

	});
});

$router->group(["prefix" =>"/v1"], function () use ($router){
	$router->group(["prefix" =>"/dueno"], function () use ($router){

		$router->get('/registro', 'DuenoControl@crearDueno');
		$router->get('/lista', 'DuenoControl@obtenerDueno');
		$router->put('/{id}', 'DuenoControl@actualizarDueno');
		$router->delete('/{id}', 'DuenoControl@borrarDueno');

	});
});

$router->group(["prefix" =>"/v1"], function () use ($router){
	$router->group(["prefix" =>"/especie"], function () use ($router){

		$router->get('/registro', 'EspecieControl@crearEspecie');
		$router->get('/lista', 'EspecieControl@obtenerEspecie');
		$router->put('/{id}', 'EspecieControl@actualizarEspecie');
		$router->delete('/{id}', 'EspecieControl@borrarEspecie');

	});
});

$router->group(["prefix" =>"/v1"], function () use ($router){
	$router->group(["prefix" =>"/historial"], function () use ($router){

		$router->get('/registro', 'HistorialControl@crearHistorial');
		$router->get('/lista', 'HistorialControl@obtenerHistorial');
		$router->put('/{id}', 'HistorialControl@actualizarHistorial');
		$router->delete('/{id}', 'HistorialControl@borrarHistorial');

	});
});