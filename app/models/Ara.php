<?php 

Class Ara extends Eloquent{
	protected $table = 'tblarea';
	protected $primaryKey = 'idArea';

	/**
	 * Método que lista los id de Emergecias de cada área
	 *
	 * @return stdArray arreglo de identificador de emergencias de cada área
	 * @author Jorge Velarde
	 **/
	public static function getAreasEmergencia()
	{
		$areas = DB::table('tblservicio')
			->join('tblarea', 'tblservicio.idArea', '=', 'tblarea.idArea')
			->whereRaw("tblservicio.detalleServicio like '%Emergencia%'")
			->select('tblservicio.idServicio', 'tblarea.nombreArea')
			->lists('nombreArea', 'idServicio');
		return $areas;
	}
}