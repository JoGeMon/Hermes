<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrimeraCarga extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{

		Schema::dropIfExists('tblRegion');
		Schema::dropIfExists('tblComuna');
		Schema::dropIfExists('tblEmpleado');
		Schema::dropIfExists('tblTipoServicio');
		Schema::dropIfExists('tblCliente');
		Schema::dropIfExists('tblArea');
		Schema::dropIfExists('tblDivision');
		Schema::dropIfExists('tblAtencion');
		Schema::dropIfExists('tblEquipoAtencion');

		Schema::create('tblRegion',function($table){
			$table->increments('idRegion');
			$table->string('nombeRegion',100);
		});

		Schema::create('tblComuna',function($table){
			$table->increments('idComuna');
			$table->integer('idRegion')->unsigned();
			$table->foreign('idRegion')->references('idRegion')->on('tblRegion')->onDelete('cascade');
			$table->string('nombreComuna',100);
		});

		Schema::create('tblEmpleado',function($table){
			$table->bigIncrements('idEmpleado');
			$table->string('nombreEmpleado',100);
			$table->string('apellidoPaternoEmpleado',100);
			$table->string('apellidoMaternoEmpleado',100);
			$table->string('usuario',50);
			$table->string('password',50);
			$table->timestamps();
		});

		Schema::create('tblTipoServicio',function($table){
			$table->increments('idTipoServicio');
		    $table->string('nombreTipoServicio');
		});

		Schema::create('tblCliente',function($table){
			$table->bigIncrements('idCliente');
			$table->integer('idComuna')->unsigned();
			$table->foreign('idComuna')->references('idComuna')->on('tblComuna')->onDelete('cascade');
			$table->string('nombreCliente',100);
			$table->string('direccionCliente',100);
		});		

		Schema::create('tblArea', function($table){
		    $table->increments('idArea');
		    $table->bigInteger('idEmpleado')->unsigned();
		    $table->foreign('idEmpleado')->references('idEmpleado')->on('tblEmpleado')->onDelete('cascade');
		    $table->string('nombreArea');
		});

		Schema::create('tblDivision', function($table){
		    $table->increments('idDivision');
		    $table->integer('idArea')->unsigned();
		    $table->foreign('idArea')->references('idArea')->on('tblArea')->onDelete('cascade');
		    $table->string('nombreDivision');
		});

		Schema::create('tblAtencion',function($table){
			$table->bigIncrements('idAtencion');
			$table->integer('idTipoServicio')->unsigned();
			$table->foreign('idTipoServicio')->references('idTipoServicio')->on('tblTipoServicio')->onDelete('cascade');
			$table->bigInteger('idCliente')->unsigned();
			$table->foreign('idCliente')->references('idCliente')->on('tblCliente')->onDelete('cascade');
			$table->text('detalleProblema');
			$table->text('detalleSolucion');
			$table->boolean('estado');
			$table->time('horaInicio');
			$table->time('horaFin');
		});

		Schema::create('tblEquipoAtencion', function($table){
			$table->bigIncrements('idEquipoAtencion');
			$table->bigInteger('idAtencion')->unsigned();
			$table->bigInteger('idEmpleado')->unsigned();
			$table->foreign('idAtencion')->references('idAtencion')->on('tblAtencion')->onDelete('cascade');
			$table->foreign('idEmpleado')->references('idEmpleado')->on('tblEmpleado')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tblRegion');
		Schema::drop('tblComuna');
		Schema::drop('tblEmpleado');
		Schema::drop('tblTipoServicio');
		Schema::drop('tblCliente');
		Schema::drop('tblArea');
		Schema::drop('tblDivision');
		Schema::drop('tblAtencion');
		Schema::drop('tblEquipoAtencion');
	}

}
