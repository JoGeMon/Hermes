<?php 

Class Ficha 
extends Eloquent{
	protected $table = 'tblAtencion';
	protected $primaryKey = 'idAtencion';
	//protected $fillable = array('idCliente', 'detalleProblema','idTipoServicio');
	
	static function getFichas(){
		$fichas = DB::table('tblAtencion')
			->join('tblCliente', 'tblAtencion.idCliente', '=', 'tblCliente.idCliente')
			->get();
		return $fichas;
	}
}