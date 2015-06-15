<?php

class ServicioController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$areas = Ara::all();
		$servicios = Servicio::all();
		return View::make('servicios',array('areas' => $areas, 'servicios' => $servicios));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$servicio = new Servicio;
		$servicio->idArea = Input::get('area');
		$servicio->detalleServicio = Input::get('servicio');
		if($servicio->save()){
			return Redirect::route('servicios');
		}else{
			dd(DB::getQueryLog());
		}

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
	 * @param  int  $idServicio = Identificador del servicio
	 * @return int $num = Cantidad de filas afectadas
	 */
	public function destroy($id)
	{
		//
	}


}
