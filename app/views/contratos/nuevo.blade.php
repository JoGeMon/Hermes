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
				@if(Session::has('error'))
					<div class="alert alert-danger text-center alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<p>{{Session::get('error')}}</p>
					</div>
				@endif
				<div class="row">
				{{Form::open(array('route' => 'contratos/guardar' , 'class' => 'form-horizontal'))}}
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
							{{Form::label('numContrato', 'Número de contrato', array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-10">
								{{Form::text('numContrato','',array('class' => 'form-control'))}}
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							{{ Form::label('fFirma','Fecha firma de Contrato', array('class' => 'col-md-6 control-label'))}}
							<div class="col-md-6">
			      				{{ Form::text('fFirma','',array('class' => 'form-control fechas'))}}
			      			</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							{{ Form::label('fInicio','Fecha inicio de Contrato', array('class' => 'col-md-6 control-label'))}}
							<div class="col-md-6">
			      				{{ Form::text('fInicio','',array('class' => 'form-control fechas'))}}
			      			</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="form-group">
							{{ Form::label('fFin','Fecha fin de Contrato', array('class' => 'col-md-4 control-label'))}}
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
							{{ Form::label('frecuencia','Frecuencia de mantención', array('class' => 'col-md-2 control-label'))}}
							<div class="col-md-10">
			      				{{ Form::select('frecuencia',$frecuencia,'',array('class' => 'form-control'))}}
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
		        		{{Form::submit('Guardar Borrador', array('class' => 'btn btn-primary'))}}
					</div>
				{{Form::close()}}
				</div>
				<br/><br/>
				<!--
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
@stop