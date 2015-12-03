<?php 

Class Atencion 
extends Eloquent{
	protected $table = 'tblatencion';
	protected $primaryKey = 'idAtencion';
	
	
	/**
	 * Método que trae todas las atenciones del mes en curso.
	 *
	 * @return stdArray Arreglo de atencinoes mensuales
	 * @author Jorge Velarde
	 **/
	public static function getAtenciones(){
		$fichas = DB::table('tblatencion')
			->join('tblcontrato', 'tblatencion.idContrato', '=', 'tblcontrato.idContrato')
			->join('tblcliente', 'tblcontrato.idCliente', '=', 'tblcliente.idCliente')
			->whereRaw("MONTH(fechaPactada) = MONTH(NOW())")
			->where('tblcontrato.estado', 1)
			->where('tblatencion.idTipoAtencion', 1)
			->select('tblcliente.*', 'tblatencion.*')
			->groupBy('tblcontrato.idContrato')
			->get();
		return $fichas;
	}

	/**
	 * Método que lista al equipo de personas que realizó una atención.
	 *
	 * @param idAtencion = Identificador de atención
	 * @return stdArray Arreglo de empleados que realizaron la atención
	 * @author Jorge Velarde
	 **/
	public static function getEquipo($idAtencion){
		$equipo = DB::table('tblatencion')
			->join('tblequipoatencion', 'tblatencion.idAtencion', '=', 'tblequipoatencion.idAtencion')
			->join('tblempleado', 'tblequipoatencion.idEmpleado', '=', 'tblempleado.idEmpleado')
			->where('tblatencion.idAtencion', $idAtencion)
			->get();
		return $equipo;
	}
}