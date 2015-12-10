<?php

class LoginController extends \BaseController {

	/**
	 * Método que autentica a un usuario en la plataforma
	 *
	 *
	 */
	public function index()
	{
		$usuario = Empleado::find(1);
		Session::put('usuario', $usuario);
		$fichas = Atencion::getAtenciones();
		$clientes = Cliente::lists('nombreCliente','idCliente');
		$empleados = Empleado::lists('nombreEmpleado','idEmpleado');
		$areas = Ara::lists('nombreArea','idArea');
		return(View::make('atenciones/listar',array(
			'fichas' => $fichas, 
			'clientes' => $clientes,
			'empleados' => $empleados,
			'areas' => $areas
			)
		));
	}


	

}
