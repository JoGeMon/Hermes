@extends('layout')
@section('contenido')
<script type="text/javascript">
	$(document).ready(function(){
		$('.fechas').datepicker({ dateFormat: "dd-mm-yy" });

		$('#area').change(function(){
			$('#equipos').load('../../servicio/cargaServicio/'+$(this).val());
		});

		$('#tblEquipos').dataTable();
	});
</script>

@if(!isset($contrato->nombreCliente))
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<div class="panel-heading">
						<h3 class="panel-title text-center">Crear Contrato</h3>
				</div>
				<div class="panel-body">
					<div class="col-md-12">
						<div class="alert alert-block alert-danger no-margin">
							<p>No existe el contrato buscado</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@else
	<div class="row">
		<div class="col-md-11">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title text-center">Contrato creado</h3>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2">
							<p><strong>Cliente: </strong></p>
						</div>
						<div class="col-md-10">
							<p>{{$contrato->nombreCliente}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<p><strong>Número de Contrato</strong></p>
						</div>
						<div class="col-md-10">
							<p>{{$contrato->codigoContrato}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<p><strong>Fecha Firma</strong></p>
						</div>
						<div class="col-md-2">
					      	<p>{{date("d-m-Y", strtotime($contrato->fechaFirma))}}</p>
						</div>
						<div class="col-md-2">
							<p><strong>Fecha Inicio</strong></p>
						</div>
						<div class="col-md-2">
							<p>{{date("d-m-Y", strtotime($contrato->inicioContrato))}}</p>
						</div>
						<div class="col-md-2">
							<p><strong>Fecha Fin</strong></p>
						</div>
						<div class="col-md-2">
							<p>{{date("d-m-Y", strtotime($contrato->finContrato))}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<p><strong>Facturación</strong></p>
						</div>
						<div class="col-md-2">
				      		<p>{{$contrato->detalleFacturacion}}</p>
						</div>
						<div class="col-md-3">
							<p><strong>Frecuencia de visitas</strong></p>
						</div>
						<div class="col-md-5">
				      		<p>{{$contrato->detalleFrecuenciaMantencion}}</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-2">
							<p><strong>Contraparte</strong></p>
						</div>
						<div class="col-md-10">
							<p>{{$contrato->nombreFirmante}}</p>
						</div>
					</div>
					<br/><br/><hr/>
					<div class="row">
						<div class="col-md-12">
							@if(Session::has('success'))
								<div class="alert alert-block  alert-succes">
									<p>{{Session::get('success')}}</p>
								</div>
							@elseif(Session::has('error'))
								<div class="alert alert-block  alert-danger">
									<p>{{Session::get('error')}}</p>
								</div>
							@endif
							<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#addEquippos"><span class="glyphicon glyphicon-plus-sign"></span> Servicios</button>
							<br/><br/>
							<table class="table table-hover table-bordered table-striped" id="tblEquipos">
								<thead>
									<tr class="active">
										<th>Área</th>
										<th>Servicio</th>
										<th>Valor</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									@foreach($servicios as $servicio)
									<tr>
										<td>{{$servicio->nombreArea}}</td>
										<td>{{$servicio->detalleServicio}}</td>
										<td>{{$servicio->valor}}</td>
										<td><a href="#"><span class="glyphicon glyphicon-edit"></span></a></td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
					</div><!-- #Equipos -->
				</div><!-- panel body -->
			</div><!-- panel default -->
		</div>
	</div>

	<div class="modal fade" id="addEquippos" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" style="background-color: #398ab9; color:#FFF">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title text-center">Agregar servicios</h4>
				</div>
				<div class="modal-body">
					{{Form::open(array('route' => 'contratos/servicio/agregar', 'class' => 'form-horizontal'))}}
						<div class="form-group">
							{{ Form::label('area','Área de servicio', array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-10">
				    			{{ Form::select('area',$areas,'',array('class' => 'form-control', 'id' => 'area'))}}
				    			{{ Form::hidden('idContrato',$contrato->idContrato)}}
							</div>
						</div>

						<div class="form-group">
							{{Form::label('servicio','Equipos',array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-10">
								{{ Form::select('servicio',array(),'',array('class' => 'form-control', 'id' => 'equipos'))}}
							</div>
						</div>

						<div class="form-group">
							{{Form::label('valor','Valor',array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-10">
								<div class="input-group">
									<div class="input-group-addon">$</div>
									{{ Form::text('valor','0',array('class' => 'form-control'))}}
							    </div>
							</div>
						</div>
					
				</div>
				<div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        {{Form::submit('Agregar',array('class' => 'btn btn-primary'))}}
	      		</div>
	      		{{Form::close()}}
			</div>
		</div>
	</div>
@endif
@stop