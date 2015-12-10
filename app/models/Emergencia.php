<?php 

Class Emergencia 
extends Eloquent{
	protected $table = 'tblatencion';
	protected $primaryKey = 'idAtencion';
	
	
	/**
	 * Método que trae todas las emergencias
	 *
	 * @return stdArray Arreglo de emergencias mensuales
	 * @author Jorge Velarde
	 **/
	public static function getEmergencias(){
		$fichas = DB::table('tblatencion')
			->join('tblcontrato', 'tblatencion.idContrato', '=', 'tblcontrato.idContrato')
			->join('tblcliente', 'tblcontrato.idCliente', '=', 'tblcliente.idCliente')
			//->whereRaw("MONTH(fechaPactada) <= MONTH(NOW())")
			->where('tblcontrato.estado', 1)
			->where('tblatencion.idTipoAtencion', 2)
			->select('tblcliente.*', 'tblatencion.*')
			->groupBy('tblcontrato.idContrato')
			->get();
		//dd(DB::getQueryLog());
		return $fichas;
	}

	/**
	 * Método que trae todas las atenciones del mes en curso del usurio logueado
	 *
	 * @param idEmpleado = Identificador del usuario logueado
	 * @return stdArray Arreglo de atencinoes mensuales
	 * @author Jorge Velarde
	 **/
	public static function getMisEmergencias($idEmpleado){
		$fichas = DB::table('tblatencion')
			->join('tblcontrato', 'tblatencion.idContrato', '=', 'tblcontrato.idContrato')
			->join('tblcliente', 'tblcontrato.idCliente', '=', 'tblcliente.idCliente')
			->join('tblequipoatencion', 'tblatencion.idEquipoAtencion', '=', 'tblequipoatencion.idEquipoAtencion')
			->where('tblcontrato.estado', 1)
			->where('tblatencion.idTipoAtencion', 2)
			->where('tblequipoatencion.idEmpleado', $idEmpleado)
			->select('tblcliente.*', 'tblatencion.*')
			->groupBy('tblcontrato.idContrato')
			->get();
		return $fichas;
	}
}