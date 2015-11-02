@extends('layout')
@section('contenido')
	<script type="text/javascript">
	$(document).ready(function(){
		$('#tblEquipo').dataTable();
		$('#tblTrabajadores').dataTable();
	});
	</script>
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Detalle de la atención</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2">
							<p><strong>Cliente: </strong></p>
						</div>
						<div class="col-md-4">
							<p>{{$contrato->nombreCliente}}</p>
						</div>
						<div class="col-md-2">
							<p><strong>Número de Contrato</strong></p>
						</div>
						<div class="col-md-4">
							<p>{{$contrato->codigoContrato}}</p>
						</div>
					</div>
					<br/>
					<div class="col-md-6">
						<table class="table table-bordered">
							<thead>
								<tr class="active"><th>Servicios</th></tr>
							</thead>
							<tbody>
								@foreach($detalleContrato as $servicio)
								<tr><td>{{$servicio->detalleServicio}}</td></tr>
								@endforeach
							</tbody>
						</table>
					</div>
					<div class="col-md-6">
						<table class="table table-bordered">
							<thead>
								<tr class="active"><th>Colaboradores</th></tr>
							</thead>
							<tbody>
								@foreach($detalleContrato as $servicio)
								<tr><td>{{$servicio->detalleServicio}}</td></tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel panel-heading"><h3 class="panel-title">Equipo de atención</h3></div>
				<div class="panel-body"->
					<div class="row">
						<div class="col-lg-12 text-right">
							<button class="btn btn-success" data-toggle="modal" data-target="#modalEmpleado"><span class="fa fa-user-plus"></span> Agregar trabajador</button>
						</div>
					</div>
					<br/>
					<div class="row">
						<table class="table table-stripped" id="tblEquipo">
							<thead>
								<tr class="active">
									<th>Trabajador</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($equipo as $miembro)
									<tr>
										<td>{{$miembro->nombreEmpleado}} {{$miembro->apellidoPaternoEmpleado}} {{$miembro->apellidoMaternoEmpleado}}</td>
										<td>Acciones</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					<div>
				</div><!-- panel body -->
			</div><!-- panel default -->
		</div>
	</div>

	<div class="modal fade" id="modalEmpleado">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header" style="background-color: #3784b1; color: #fff">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
        			<h4 class="modal-title">Asignar Trabajador</h4>
      			</div>
      			<div class="modal-body">
      				{{ Form::open(array())}}
      					<table id="#tblTrabajadores" class="table table-bordered table-hover">
      						<thead>
      							<tr class="active">
      								<th>Trabajador</th>
      								<th>Acción</th>
      							</tr>
      						</thead>
      						<tbody>
      							@foreach($trabajadores as $trabajador)
      								<tr>
      									<td>{{$trabajador->nombreEmpleado}} {{$trabajador->apellidoPaternoEmpleado}} {{$trabajador->apellidoMaternoEmpleado}}</td>
      									@if(!in_array($trabajador->idEmpleado, $arrEquipo))
											<td><a href="{{URL::route('mantencion/equipo/add',array($atencion->idAtencion,$trabajador->idEmpleado))}}" class="btn btn-success"><span class="glyphicon glyphicon-ok"> Asignar</span></a></td>
										@else
											<td><a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-remove"> Quitar </span></a></td>
	      								@endif
      								</tr>
      							@endforeach
      						</tbody>
      					</table>
      				{{ Form::close()}}
      			</div>
      			<div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        <button type="button" class="btn btn-primary">Añadir</button>
		      </div>
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
@stop