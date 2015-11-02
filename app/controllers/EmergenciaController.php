<?php

class EmergenciaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$emergencias = Emergencia::getEmergencias();
		$clientes = Cliente::lists('nombreCliente','idCliente');
		$contratos = Contrato::getContratosVigentes();
		$empleados = Empleado::lists('nombreEmpleado','idEmpleado');
		$areas = Ara::getAreasEmergencia();

		return View::make('emergencias/listar',array(
			"fichas" => $emergencias,
			"clientes" => $clientes,
			'empleados' => $empleados,
			'contratos' => $contratos,
			'areas' => $areas
		));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Método que almacena una emergencia en la base de datos
	 *
	 * @return Response
	 */
	public function store()
	{
		$emergencia = new Emergencia();
		$emergencia->idTipoAtencion = 2;
		$emergencia->idContrato = Input::get('cliente');
		$emergencia->idServicio = Input::get('area');
		$emergencia->estado = 0;
		$emergencia->fechaPactada = Input::get('fechaLlamda');
		$emergencia->horaLlamada = Input::get('horaLlamda');
		if($emergencia->save()){
			return Redirect::route('emergencias');
		}else{
			return Redirect::route('emergencias');
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
