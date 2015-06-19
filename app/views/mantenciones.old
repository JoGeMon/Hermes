@extends('layout')
@section('contenido')
	<script type="text/javascript">
		$(document).ready(function(){
			$(".tab-pane:first").addClass('active');
			$(".propia:first").addClass('active');
		});
	</script>

	<ul class="nav nav-tabs">
		@foreach($areas as $area)
			<li role="presentation" class="propia"><a data-toggle="tab" href="#{{$area->idArea}}">{{$area->nombreArea}}</a></li>
		@endforeach
	</ul>
		<button type="button" class="btn btn-primary pull-right">Crear Servicio</button>
	<div class="tab-content">
		@foreach($areas as $area)
			<div role="tabpanel" class="tab-pane" id="{{$area->idArea}}">
				<br/>
				<table class="table table-bordered table-striped table-hover">
					<thead>
						<tr class="active">
							<th>ID</th>
							<th>Detalle Servicio</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
				@foreach($servicios as $servicio)
					@if($area->idArea == $servicio->idArea)
						<tr>
							<td>{{$servicio->idServicio}}</td>
							<td>{{$servicio->detalleServicio}}</td>
							<td><span class="glyphicon glyphicon-trash"></span></td>
						</tr>
					@endif
				@endforeach
					</tbody>
				</table>
			</div>
		@endforeach
	</div>
@stop