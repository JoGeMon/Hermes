<?php 

Class Ficha 
extends Eloquent{
	protected $table = 'tblAtencion';
	protected $primaryKey = 'idAtencion';
	protected $fillable = array('idCliente', 'detalleProblema','idTipoServicio');
	
}