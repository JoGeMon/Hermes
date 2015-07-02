<?php 

class Contrato extends Eloquent{
	protected $table = 'tblcontrato';
	protected $primaryKey = 'idcontrato';
	

	public function agregaServicio($idContrato,$idServicio, $valor)
	{
		$affected = DB::table('detalleContrato')->insert(
			array(
				'idContrato' => $idContrato,
				'idServicio' => $idServicio,
				'valor' => $valor,
			));
		return $affected;
	}
}