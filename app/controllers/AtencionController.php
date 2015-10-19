<?php

class AtencionController extends \BaseController {

	/**
	 * Despliega todas las atenciones de la tabla de hechos
	 *
	 * @return Response
	 */
	public function index()
	{
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
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Método que inserta las atenciones estipuladas en un contrato.
	 *
	 * @return Response
	 */
	public function storeByContrato($idContrato, $idServicio)
	{
		$contrato = Contrato::find($idContrato);
		$dContrato = Contrato::getDetalleContrato($idContrato);
		$frecuencia = Frecuencia::where('idFrecuenciaMantencion',$contrato->idFrecuenciaMantencion)->first();
		$año = 12;
		while($año >= 0){
			$atencion = new Atencion();
			$atencion->idTipoAtencion = 1;
			$atencion->idContrato = $idContrato;
			$atencion->idServicio = $idServicio;
			if($año == 12){
				$atencion->fechaPactada = $contrato->inicioContrato;
			}else{
				$atencion->fechaPactada = $nuevaFecha;
			}
			if(!$atencion->save()){
				return false;
			}
			$nuevaFecha = date('Y-m-d',strtotime($atencion->fechaPactada.'+ '.$frecuencia->numFrecuencia.' months'));
			$año = $año - $frecuencia->numFrecuencia;
		}
		return true;
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


	/**
	 * Método que despliega el equipo que atendió una mantención
	 *
	 * @param $idMantencion = Identificador de mantención
	 * @return stdArray $equipo = Arreglo de usuarios que representan un equipo
	 * @author Jorge Velarde
	 **/
	public function getEquipo($idMantencion){
		$atencion = Atencion::find($idMantencion);
		$equipo = Atencion::getEquipo($atencion->idAtencion);
		$contrato = Contrato::getCabecera($atencion->idContrato);
		$detalleContrato = Contrato::getDetalleContrato($atencion->idContrato);
		$empleados = Empleado::all();
		return View::make('atenciones/verEquipo',array(
			"equipo" => $equipo,
			"contrato" => $contrato,
			"detalleContrato" => $detalleContrato,
			"trabajadores" => $empleados,
			"atencion" => $atencion
		));
	}

	public function addEmpleado($idAtencion, $idEmpleado)
	{
		$atencion = Atencion::find($idAtencion);
		$equipo = Atencion::getEquipo($atencion->idAtencion);
		$contrato = Contrato::getCabecera($atencion->idContrato);
		$detalleContrato = Contrato::getDetalleContrato($atencion->idContrato);

		$empleados = Empleado::all();
		if(Empleado::addEmpleadoEquipo($idAtencion,$idEmpleado))
		{
			return Redirect::route('mantencion/equipo',array($idAtencion));
		}else{
			return Redirect::route('mantencion/equipo',array($idAtencion));
		}
	}

	/**
	 * Método que quita un empleado de un equipo de atención
	 *
	 * @return bool Resultado de la operación
	 * @author 
	 **/
	public function removeEmpleado()
	{
	}


}
