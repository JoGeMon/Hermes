<?php 

Class Atencion 
extends Eloquent{
	protected $table = 'tblatencion';
	protected $primaryKey = 'idAtencion';
	
	public static function getAtenciones(){
		$fichas = DB::table('tblatencion')
			->join('tblcliente', 'tblatencion.idCliente', '=', 'tblcliente.idCliente')
			->whereRaw("MONTH(fechaPactada) = 6")
			->get();
		//dd(DB::getQueryLog());
		return $fichas;
	}
}