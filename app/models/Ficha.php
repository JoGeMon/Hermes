<?php 

Class Ficha 
extends Eloquent{
	protected $table = 'tblAtencion';
	protected $primaryKey = 'idAtencion';
	
	static function getFichas(){
		$fichas = DB::table('tblAtencion')
			->join('tblCliente', 'tblAtencion.idCliente', '=', 'tblCliente.idCliente')
			->whereRaw("MONTH(fechaPactada) = 6")
			->get();
		//dd(DB::getQueryLog());
		return $fichas;
	}
}