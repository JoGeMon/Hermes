<?php

class FichaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$fichas = Ficha::all();
		$clientes = Cliente::lists('nombreCliente','idCliente');
		return(View::make('ficha',array(
			'fichas' => $fichas, 
			'clientes' => $clientes
			)
		));
	}

	/**
	 * Despliega todas las atenciones realizadas
	 *
	 * @return Response
	 */
	public function listar()
	{
		$fichas = Ficha::getFichas();
		$clientes = Cliente::lists('nombreCliente','idCliente');
		//$empleados = Empleado::lists("CONCAT(nombreEmpleado,apellidoPaternoEmpleado)", "idEmpleado");
		$empleados = Empleado::getEmpleadoCombo();
		//$empleados = Empleado::lists(DB::raw("CONCAT(nombreEmpleado,' ',apellidoPaternoEmpleado)"), "idEmpleado");
		$areas = Ara::lists('nombreArea','idArea');
		//dd($fichas);
		return(View::make('mantenciones',array(
			'fichas' => $fichas,
			'clientes' => $clientes,
			'empleados' => $empleados,
			'areas'	=>  $areas		
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
		$ficha = new Ficha();
		$formFicha = Input::all();
		$ficha->idTipoServicio = $formFicha['tipoAtencion'];
		$ficha->idCliente = $formFicha['cliente'];
		$ficha->detalleProblema = $formFicha['detalleAtencion'];
		$ficha->save();
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
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
	 * Muestra los datos de un cliente en particular
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function pinta($id)
	{
		$cliente = Cliente::getCliente($id);	
		return View::make("nombreCliente",array('cliente' => $cliente));
	}

}
