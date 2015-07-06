@extends('layout')
@section('contenido')
<script type="text/javascript">
	$(document).ready(function(){
		$('.fechas').datepicker({ dateFormat: "dd-mm-yy" });

		$('#area').change(function(){
			$('#equipos').load('../../servicio/cargaServicio/'+$(this).val());
		});
	});
</script>
<div class="row">
	<div class="col-md-11">
		<div class="panel panel-default">
			<div class="panel-heading">
					<h3 class="panel-title text-center">Crear Contrato</h3>
			</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-2">
						<p>Cliente</p>
					</div>
					<div class="col-md-10">
						<p>{{$contrato->nombreCliente}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p>Cod. Contrato</p>
					</div>
					<div class="col-md-10">
						<p>{{'$contrato->nombreCliente'}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p>Fecha Inicio</p>
					</div>
					<div class="col-md-10">
			      		<p>{{'$contrato->fechaInicio'}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p>Fecha Fin</p>
					</div>
					<div class="col-md-10">
			      		<p>{{'$contrato->fechaFin'}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p>Facturación</p>
					</div>
					<div class="col-md-10">
			      		<p>{{'$contrato->detalleFacturacion'}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2">
						<p>Contraparte</p>
					</div>
					<div class="col-md-10">
						<p>{{'$contrato->contraparte'}}</p>
					</div>
				</div>
				<br/><br/>
				<div class="row" id="tblEquipos">
					<div class="col-md-12">
						<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#addEquippos"><span class="glyphicon glyphicon-plus-sign"></span> Servicios</button>
						<br/><br/>
						<table class="table table-hover">
							<thead>
								<tr class="active">
									<th>Equipo</th>
									<th>Valor</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td colspan="2" class="text-center">No tiene equipos agregados aún</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div><!-- #Equipos -->
			</div>
		</div>
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
@stop