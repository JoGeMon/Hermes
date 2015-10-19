<?php 

Class Atencion 
extends Eloquent{
	protected $table = 'tblatencion';
	protected $primaryKey = 'idAtencion';
	
	public static function getAtenciones(){
		$fichas = DB::table('tblatencion')
			->join('tblContrato', 'tblatencion.idContrato', '=', 'tblContrato.idContrato')
			->join('tblcliente', 'tblContrato.idCliente', '=', 'tblcliente.idCliente')
			->whereRaw("MONTH(fechaPactada) = MONTH(NOW())")
			->get();
		//dd(DB::getQueryLog());
		return $fichas;
	}

	/**
	 * Método que trae un equipo de mantención desde 
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