@extends('layout')
@section('contenido')
<script type="text/javascript">
	$(document).ready(function(){
		$('.fechas').datepicker({ dateFormat: "dd-mm-yy" });

		//$('#tblEquipos').hide();

		$('#borrador').click(function(){
			$('#tblEquipos').show();
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
				{{Form::open(array('class' => 'form-horizontal'))}}
					<div class="col-md-12">
						<div class="form-group">
							{{ Form::label('cliente', 'Cliente', array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-10">
								{{ Form::select('cliente',$clientes,'',array('class' => 'form-control'))}}
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							{{Form::label('IdContrato', 'Cod. Contrato', array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-10">
								{{Form::text('idContrato','',array('id' => 'idContrato', 'class' => 'form-control'))}}
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{{ Form::label('fInicio','Fecha Inicio', array('class' => 'col-md-offset-1 col-md-3 control-label'))}}
							<div class="col-md-8">
			      				{{ Form::text('fInicio','',array('class' => 'form-control fechas'))}}
			      			</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{{ Form::label('fFin','Fecha Fin', array('class' => 'col-md-4 control-label'))}}
							<div class="col-md-8">
			      				{{ Form::text('fFin','',array('class' => 'form-control fechas'))}}
			      			</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							{{ Form::label('facturacion','Facturación', array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-10">
			      				{{ Form::select('facturacion',$facturacion,'',array('class' => 'form-control'))}}
			      			</div>
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							{{ Form::label('contraparte','Contraparte', array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-10">
			      				{{ Form::text('contraparte','',array('class' => 'form-control'))}}
			      			</div>
						</div>
					</div>	
					<div class="col-md-12 text-right">
						<button type="button" class="btn btn-default" data-dimdiss="modal">Volver</button>
		        		<button type="button" id="borrador" class="btn btn-primary">Guardar Borrador</button>
					</div>
				{{Form::close()}}
				</div>
				<br/><br/>
				<div class="row" id="tblEquipos">
					<div class="col-md-12">
						<button type="button" class="btn btn-success pull-right" data-toggle="modal" data-target="#addEquippos"><span class="glyphicon glyphicon-plus-sign"></span> Servicios</button>
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
				{{Form::open(array('class' => 'form-horizontal'))}}
					<div class="form-group">
						{{ Form::label('area','Área de servicio', array('class' => 'col-md-2 control-label'))}}
						<div class="col-md-10">
			    			{{ Form::select('area',$areas,'',array('class' => 'form-control', 'id' => 'area'))}}
						</div>
					</div>

					<div class="form-group">
						{{Form::label('equipos','Equipos',array('class' => 'col-md-2 control-label'))}}
						<div class="col-md-10">
							{{ Form::select('equipos',array(),'',array('class' => 'form-control', 'id' => 'equipos'))}}
						</div>
					</div>

					<div class="form-group">
						{{Form::label('valor','Valor',array('class' => 'col-md-2 control-label'))}}
						<div class="col-md-10">
							<div class="input-group">
								<div class="input-group-addon">$</div>
								{{ Form::text('valor','',array('class' => 'form-control'))}}
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