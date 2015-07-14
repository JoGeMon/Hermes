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
		$atencion = new Atencion();
		$atencion->idTipoAtencion = 1;
		$atencion->idContrato = $idContrato;
		$atencion->idServicio = $idServicio;
		$año = 12;
		while($año > 0){
			if($año == 12){
				$atencion->fechaPactada = $contrato->inicioContrato;
			}
			if(!$atencion->save()){
				dd($atencion->save());
				return false;
			}
			$atencion->fechaPactada = date('Y-m-d',strtotime($contrato->inicioContrato.'+ '.$frecuencia->numFrecuencia.' months'));
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


}
