<?php

class ContratoController extends \BaseController {

	/**
	 * Lista todos los contratos existentes.
	 *
	 * @return Response
	 */
	public function index()
	{
		$clientes = Cliente::lists('nombreCliente','idCliente');
		$areas = Ara::lists('nombreArea','idArea');
		return View:: make('contratos',array('clientes' => $clientes, 'areas' => $areas));
	}


	/**
	 * Despliega el formulario de creación de contratos
	 *
	 * @return Response
	 */
	public function create()
	{
		$clientes = Cliente::lists('nombreCliente','idCliente');
		$areas = Ara::lists('nombreArea','idArea');
		array_unshift($areas, 'Seleccione un área');
		$facturacion = Facturacion::lists('detalleFacturacion', 'idFacturacion');
		return View::make('contratos/nuevo',array('clientes' => $clientes, 'areas' => $areas, 'facturacion' => $facturacion
			));
	}


	/**
	 * Guarda un nuevo contrato.
	 *
	 * @return Response
	 */
	public function store()
	{
		$idContrato = Input::get('idContrato');
		$idServicio = Input::get('servicio');
		$valor = Input::get('valor');
		$objContrato = new Contrato();
		if($objContrato->agregaServicio($idContrato,$idServicio, $valor)){
			return Redirect::route('contratos/borrador',array('idContrato' => $idContrato));
		}else{
			return Redirect::route('contratos/borrador',array('idContrato' => $idContrato));
		}
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($idContrato)
	{
		$areas = Ara::lists('nombreArea','idArea');
			array_unshift($areas, 'Seleccione un área');
		$contrato = Contrato::find($idContrato); //Cambiar por método con join que llene la vista de edición de contratos
		$contrato = Contrato::getCabecera($idContrato);
		$detalleContrato = Contrato::getDetalleContrato($idContrato);
		return View::make('contratos/mostrar',array('contrato' => $contrato, 'areas' => $areas, 'servicios' => $detalleContrato ));
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
