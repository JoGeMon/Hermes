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

}