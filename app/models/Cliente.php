<?php 

class Cliente extends Eloquent{
	protected $table = 'tblCliente';
	protected $primaryKey = 'idCliente';
	
	static function getCliente($idCliente)
	{
		$cliente = DB::TABLE('tblCliente')
			->where('idCliente',$idCliente)
			->first();
		return $cliente;
	}	
}