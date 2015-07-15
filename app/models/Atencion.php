<?php 

Class Atencion 
extends Eloquent{
	protected $table = 'tblatencion';
	protected $primaryKey = 'idAtencion';
	
	public static function getAtenciones(){
		$fichas = DB::table('tblatencion')
			->join('tblContrato', 'tblatencion.idContrato', '=', 'tblContrato.idContrato')
			->join('tblcliente', 'tblContrato.idCliente', '=', 'tblcliente.idCliente')
			->whereRaw("MONTH(fechaPactada) = MONTH(NOW())")
			->get();
		//dd(DB::getQueryLog());
		return $fichas;
	}
}