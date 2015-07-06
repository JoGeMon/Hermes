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

	public function getCabecera($idContrato){
		$cabecera = DB::table('tblcontrato')
			->join('tblcliente', 'tblcontrato.idCliente', '=', 'tblcliente.idCliente')
			->join('tblfacturacion', 'tblcontrato.idFacturacion', '=', 'tblfacturacion.idFacturacion')
			->join('tblfrecuenciamantencion', 'tblcontrato.idFrecuenciaMantencion', '=', 'tblfrecuenciamantencion.idFrecuenciaMantencion')
			->get();			
		return $cabecera;
	}
}