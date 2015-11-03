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
			->join('tblcliente', 'tblContrato.idCliente', '=', 'tblcliente.idCliente')
			//->whereRaw("MONTH(fechaPactada) <= MONTH(NOW())")
			->where('tblcontrato.estado', 1)
			->where('tblAtencion.idTipoAtencion', 2)
			->select('tblcliente.*', 'tblatencion.*')
			->groupBy('tblcontrato.idContrato')
			->get();
		//dd(DB::getQueryLog());
		return $fichas;
	}
}