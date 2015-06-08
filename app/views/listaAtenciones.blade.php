@extends('layout')
@section('contenido')
	<script type="text/javascript">
		$(document).ready(function(){
			$('#atenciones').dataTable();
			$('[data-toggle="tooltip"]').tooltip()
		});
	</script>

	<div class="container">
		<div class="row">
			<div class="col-lg-11">
				<div class="alert alert-info alert-dismissible" role="alert" id="info">
			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  	<p><span class="glyphicon glyphicon-info-sign"></span> En esta pantalla se presentan las mantenciones del mes actual</p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-11">
				<div class="panel panel-default">
					<div class="panel-heading text-center"><span class="pull-left glyphicon glyphicon-chevron-left"></span>JUNIO <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Mantenciones del mes"></span><span class="pull-right glyphicon glyphicon-chevron-right"></span></div>
					<div class="panel-body">
						<table id="atenciones" class="table table-striped table-hover table-bordered">
							<thead>
								<tr class="active">
									<th>Cliente</th>
									<th>Tipo</th>
									<th>Fecha pactada</th>
									<th>Estado</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($fichas as $ficha)
									<tr>
										<td>{{$ficha->nombreCliente}}</td>
										@if($ficha->idTipoAtencion == 1)
											<td>Matención</td>
										@elseif($ficha->idTipoAtencion == 2)
											<td>Emergencia</td>
										@endif
										<td>{{$ficha->fechaPactada}}</td>
										@if($ficha->estado)
											<td>Realizada</td>
										@else
											<td>No realizada</td>
										@endif
										<td>Acciones</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop