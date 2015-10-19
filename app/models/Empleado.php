<?php 

Class Empleado extends Eloquent{
	protected $table = 'tblempleado';
	protected $primaryKey = 'idEmpleado';

	static function getEmpleados(){
		$empleados = DB::table('tblempleado')->get();
		return $empleados;
	}

	static function getEmpleadoCombo(){
		$empleados = DB::table('tblempleado')
			->lists(DB::raw('concat(nombreEmpleado," ",apellidoPaternoEmpleado," ",apellidoMaternoEmpleado)'),'idEmpleado');
		return $empleados;				
	}

	/**
	 * Método que agrega un empleado a un equipo de atención
	 *
	 * @param $idAtencion = Identificador de atención
	 * @param $idEmpleado = Identificado de empleado
	 * @return $fila = Cantidad de filas afectadas
	 * @author Jorge Velarde
	 **/
	static function addEmpleadoEquipo($idAtencion, $idEmpleado){
		$fila = DB::table('tblequipoatencion')->insert(
			array(
				'idAtencion' => $idAtencion,
				'idEmpleado' => $idEmpleado
				));
		return $fila;
	}

}