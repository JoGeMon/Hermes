<?php 

Class Ficha 
extends Eloquent{
	protected $table = 'tblatencion';
	protected $primaryKey = 'idAtencion';
	
	static function getFichas(){
		$fichas = DB::table('tblatencion')
			->join('tblcliente', 'tblatencion.idCliente', '=', 'tblcliente.idCliente')
			->whereRaw("MONTH(fechaPactada) = 6")
			->get();
		dd(DB::getQueryLog());
		return $fichas;
	}
}