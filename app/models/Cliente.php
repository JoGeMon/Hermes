<?php 

class Cliente extends Eloquent{
	protected $table = 'tblcliente';
	protected $primaryKey = 'idCliente';
	
	static function getCliente($idCliente)
	{
		$cliente = DB::table('tblcliente')
			->where('idCliente',$idCliente)
			->first();
		return $cliente;
	}	
}