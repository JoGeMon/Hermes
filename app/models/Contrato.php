<?php 

class Contrato extends Eloquent{
	protected $table = 'tblcontrato';
	protected $primaryKey = 'idcontrato';

	public static function getContratos(){
		$cabecera = DB::table('tblcontrato')
			->join('tblcliente', 'tblcontrato.idCliente', '=', 'tblcliente.idCliente')
			->join('tblfacturacion', 'tblcontrato.idFacturacion', '=', 'tblfacturacion.idFacturacion')
			->join('tblfrecuenciamantencion', 'tblcontrato.idFrecuenciaMantencion', '=', 'tblfrecuenciamantencion.idFrecuenciaMantencion')
			->get();			
		return $cabecera;
	}
	
	public function agregaServicio($idContrato,$idServicio, $valor)
	{
		$affected = DB::table('tbldetallecontrato')->insert(
			array(
				'idContrato' => $idContrato,
				'idServicio' => $idServicio,
				'valor' => $valor
			));
		return $affected;
	}

	public static function getCabecera($idContrato){
		$cabecera = DB::table('tblcontrato')
			->join('tblcliente', 'tblcontrato.idCliente', '=', 'tblcliente.idCliente')
			->join('tblfacturacion', 'tblcontrato.idFacturacion', '=', 'tblfacturacion.idFacturacion')
			->join('tblfrecuenciamantencion', 'tblcontrato.idFrecuenciaMantencion', '=', 'tblfrecuenciamantencion.idFrecuenciaMantencion')
			->where('idContrato',$idContrato)
			->first();			
		return $cabecera;
	}

	public static function getDetalleContrato($idContrato){
		$detalle = DB::table('tbldetallecontrato')
			->join('tblservicio', 'tbldetallecontrato.idServicio', '=', 'tblservicio.idServicio')
			->join('tblarea', 'tblservicio.idArea', '=', 'tblarea.idArea')
			->where('idContrato',$idContrato)
			->get();			
		return $detalle;
	}
}