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
		return View::make('contratos/nuevo',array('clientes' => $clientes, 'areas' => $areas));
	}


	/**
	 * Guarda un nuevo contrato.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
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
