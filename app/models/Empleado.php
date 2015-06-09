<?php 

Class Empleado extends Eloquent{
	protected $table = 'tblEmpleado';
	protected $primaryKey = 'idEmpleado';

	static function getEmpleados(){
		$empleados = DB::table('tblEmpleado')->get();
		return $empleados;
	}

	static function getEmpleadoCombo(){
		$empleados = DB::table('tblEmpleado')
			->lists(DB::raw('concat(nombreEmpleado," ",apellidoPaternoEmpleado," ",apellidoMaternoEmpleado)'),'idEmpleado');
		return $empleados;				
	}

}