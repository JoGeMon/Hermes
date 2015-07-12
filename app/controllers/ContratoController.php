<?php

class ContratoController extends \BaseController {

	/**
	 * Lista todos los contratos existentes.
	 *
	 * @return Response
	 */
	public function index()
	{
		$contratos = Contrato::getContratos();
		return View:: make('contratos/listar',array('contratos' => $contratos));
	}


	/**
	 * Despliega el formulario de creación de contratos
	 *
	 * @return Response
	 */
	public function create()
	{
		$clientes = Cliente::lists('nombreCliente','idCliente');
		$facturacion = Facturacion::lists('detalleFacturacion', 'idFacturacion');
		array_unshift($facturacion, 'Seleccione una opción');
		$frecuencia = Frecuencia::lists('detalleFrecuenciaMantencion', 'idFrecuenciaMantencion');
		array_unshift($frecuencia, 'Seleccione una opción');
		return View::make('contratos/nuevo',array(
			'clientes' => $clientes, 
			'facturacion' => $facturacion,
			'frecuencia' => $frecuencia
			));
	}

	/**
	 * Método que guarda el nuevo borrador de un contrato
	 *
	 * @return Redirecciona
	 */
	public function store()
	{
		$campos = Input::all();
		$contrato = new Contrato;
		$contrato->idCliente = $campos['cliente'];
		$contrato->idFacturacion = $campos['facturacion'];
		$contrato->idFrecuenciaMantencion = $campos['facturacion'];
		$contrato->codigoContrato = $campos['numContrato'];
		$contrato->nombreFirmante = $campos['contraparte'];
		$contrato->fechaFirma = $campos['fFirma'];
		$contrato->inicioContrato = $campos['fInicio'];
		$contrato->finContrato = $campos['fFin'];
		if($contrato->save()){
			return Redirect::route('contratos')->with('success','Se ha agregado un nuevo contrato');
		}else{
			return Redirect::route('contratos/nuevo')->with('error','Ocurrió un error al agregar un nuevo contrato');
		}
	}


	/**
	 * Método que guarda un servicio en un borrador de contrato
	 *
	 * @return Response
	 */
	public function storeServicio()
	{
		$idContrato = Input::get('idContrato');
		$idServicio = Input::get('servicio');
		$valor = Input::get('valor');
		$objContrato = new Contrato();
		if($objContrato->agregaServicio($idContrato,$idServicio, $valor)){
			return Redirect::route('contratos/muestra',array('idContrato' => $idContrato));
		}else{
			return Redirect::route('contratos/muestra',array('idContrato' => $idContrato));
		}
	}


	/**
	 * Método que despliega la cabecera de un contrato con la posibilidad de agregar servicios
	 *
	 * @param  int  $idContrato = Identificador del contrato buscado
	 * @author Jorge Velarde
	 */
	public function show($idContrato)
	{
		$areas = Ara::lists('nombreArea','idArea');
		array_unshift($areas, 'Seleccione un área');
		$contrato = Contrato::getCabecera($idContrato);
		$detalleContrato = Contrato::getDetalleContrato($idContrato);
		return View::make('contratos/mostrar',array('contrato' => $contrato, 'areas' => $areas, 'servicios' => $detalleContrato ));
	}

	/**
	 * Método que despliega el detalle de un contrato para ser desplegado en una modal.
	 *
	 * @param  int  $idContrato = Identificador del contrato buscado
	 * @author Jorge Velarde
	 */
	public function showDetalles($idContrato)
	{
		$contrato = Contrato::getCabecera($idContrato);
		$detalleContrato = Contrato::getDetalleContrato($idContrato);
		return View::make('contratos/detalles',array('contrato' => $contrato, 'servicios' => $detalleContrato ));
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
