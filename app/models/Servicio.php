<?php 

Class Servicio extends Eloquent{
	protected $table = 'tblservicio';
	protected $primaryKey = 'idServicio';

	public function getServicios($idArea)
	{
		$servicio  = DB::table('tblservicio')
			->where('idArea', $idArea)
			->get();
		return $servicio;
	}
}