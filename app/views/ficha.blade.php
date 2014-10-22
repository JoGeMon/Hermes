@extends('layout')
	@section('contenido')
		<p>La siguiente ficha tiene por objetivo, informar sobre las distintas atenciones realizadas por el área de producción. Se solicita rigurosidad a la hora de llenar los datos.</p>
		<div class="panel panel-default">
			<div class="panel-heading">Ingresode requerimiento</div>
			<div class="panel-body">
				{{ Form::open(array('url' => 'foo/bar', )) }}
				<div class="row">
					<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9">
						{{ Form::label('nombreCliente','Cliente')}}
						{{ Form::text('nombreCliente','',array('class' => 'form-control'))}}
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						{{ Form::label('rutCliente','Rut Empresa')}}
						{{ Form::text('rutCliente','',array('class' => 'form-control'))}}
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sd-12 col-xs-12">
						{{Form::label('direccionCliente', 'Dirección cliente')}}
						{{Form::text('direccionCliente', '', array('class'=> 'form-control' ))}}
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sd-12 col-xs-12">
						{{ Form::label('tipoAtencion','Tipo de atención')}}
						{{ Form::select('tipoAtencion',array(
							'Mantencion' => "Mantención",
							'Emergencia' => "Emeregencia"
						))}}
					</div>
				</div>
				{{ Form::close() }}
			</div>
		</div>
		<div class="well">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Cliente</th>
						<th>Motivo</th>
						<th>Acciones</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	@stop
