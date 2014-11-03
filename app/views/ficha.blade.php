@extends('layout')
	@section('contenido')
	<script type="text/javascript">
		$(document).ready(function(){
			$('#atenciones').dataTable({
				"oLanguage" : {
					"sProcessing":     "Procesando...",
				    "sLengthMenu":     "Mostrar _MENU_ registros",
				    "sZeroRecords":    "No se encontraron resultados",
				    "sEmptyTable":     "Ningún dato disponible en esta tabla",
				    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
				    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
				    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
				    "sInfoPostFix":    "",
				    "sSearch":         "Buscar:",
				    "sUrl":            "",
				    "sInfoThousands":  ",",
				    "sLoadingRecords": "Cargando...",
				    "oPaginate": {
				        "sFirst":    "Primero",
				        "sLast":     "Último",
				        "sNext":     "Siguiente",
				        "sPrevious": "Anterior"
				    },
				    "oAria": {
				        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
				        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
				    }
				}
			});
		});
	</script>
		<p>La siguiente ficha tiene por objetivo, informar sobre las distintas atenciones realizadas por el área de producción. Se solicita rigurosidad a la hora de llenar los datos.</p>
		{{'Traigo: '.$fichas}};

		<div class="panel panel-primary">
			<div class="panel-heading">Ingresode requerimiento</div>
			<div class="panel-body">
				{{ Form::open(array('route' => 'ficha/guardar')) }}
				<div class="row">
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						{{ Form::label('idCliente','N° cliente')}}
						{{ Form::text('idCliente','',array('class' => 'form-control'))}}
					</div>
					<div class="col-lg-6 col-md-6 col-sd-6 col-xs-6">
						{{ Form::label('cliente','Nombre Cliente')}}
						{{ Form::select('cliente',$clientes,'',array('class' => 'form-control'))}}
					</div>
					<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
						{{ Form::label('tipoAtencion','Tipo de atención')}}
						{{ Form::select('tipoAtencion',array(
							'' => 'Selecciona una opción',
							'1' => "Mantención",
							'2' => "Emeregencia"
						),'',array('class' => 'form-control'))}}
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sd-12 col-xs-12">
						{{Form::label('direccionCliente', 'Dirección cliente')}}
						{{Form::text('direccionCliente', '', array('class'=> 'form-control', 'readonly' => 'readonly'  ))}}
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sd-12 col-xs-12">
						{{Form::label('detalleAtencion', 'Detalle de atenci&oacute;n')}}
						{{Form::textarea('detalleAtencion','',array('class' => 'form-control'))}}
					</div>
				</div>
				<br/>
				<div class="row">
					<div class="col-lg-12 col-md-12 ol-sd-12 col-xs-12" align="right">
						{{Form::submit('Crear',array('class' => 'btn btn-primary'))}}
					</div>
				</div>
				{{ Form::close() }}
			</div>
		</div>
		<div class="panel panel-primary">
			<div class="panel-heading">Detalle de atenciones</div>
			<div class="panel-body">
				<button class="btn btn-primary pull-right">Ingesar atención</button>
				<br/><br/><br/>
				<table id="atenciones">
					<thead>
						<tr class="active">
							<th>Cliente</th>
							<th>Motivo</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($fichas as $ficha)
							<tr>
								<td>{{$ficha->idCliente}}</td>
								<td>{{$ficha->detalleProblema}}</td>
								<td>Acciones</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	@stop
