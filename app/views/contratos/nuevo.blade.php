@extends('layout')
@section('contenido')
<div class="row">
	<div class="col-md-11">
		<div class="panel panel-default">
			<div class="panel-heading">
					<h3 class="panel-title text-center">Crear Contrato</h3>
			</div>
			<div class="panel-body">
				{{Form::open(array('class' => 'form-horizontal'))}}
					<div class="col-md-12">
						<div class="form-group">
							{{ Form::label('cliente', 'Cliente', array('class' => 'col-sm-1 control-label'))}}
							<div class="col-sm-11">
								{{ Form::select('cliente',$clientes,'',array('class' => 'form-control'))}}
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{{Form::label('IdContrato', 'ID Contrato', array('class' => 'col-sm-2 control-label'))}}
							<div class="col-sm-10">
								{{Form::text('idContrato','',array('id' => 'idContrato', 'class' => 'form-control'))}}
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							{{ Form::label('facturacion','Tipo de facturación', array('class' => 'col-sm-2 control-label'))}}
							<div class="col-sm-10">
			      				{{ Form::select('facturacion',$facturacion,'',array('class' => 'form-control'))}}
			      			</div>
						</div>
					</div>	
					<div class="col-md-12 text-right">
						<button type="button" class="btn btn-default" data-dismiss="modal">Volver</button>
		        		<button type="button" class="btn btn-primary">Guardar Borrador</button>
					</div>
				{{Form::close()}}

			<br/>
					<div class="col-md-6">
						<div class="form-group">
							{{ Form::label('area','Área de servicio', array('class' => 'col-sm-2 control-label'))}}
							<div class="col-sm-10">
			      				{{ Form::select('area',$areas,'',array('class' => 'form-control'))}}
			      			</div>
						</div>
					</div>	
			<table class="table table-hover">
				<thead>
					<tr class="active">
						<th>Equipo</th>
						<th>Valor</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Uno</td>
						<td>Otro</td>
					</tr>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
@stop