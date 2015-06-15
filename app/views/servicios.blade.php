@extends('layout')
@section('contenido')
	<script type="text/javascript">
		$(document).ready(function(){
			$(".tab-pane:first").addClass('active');
			$(".propia:first").addClass('active');

			$(".btnCrear").click(function(){
				$("#area").val($(this).val());
				$("#nombreServicio").val('');
			});
		});

		$('body').on('hidden.bs.modal', '.modal', function () {
        	$(this).removeData('bs.modal');
      	});
	</script>
	<div class="row">
		<div class="col-lg-11">
			<ul class="nav nav-tabs">
				@foreach($areas as $area)
					<li role="presentation" class="propia"><a data-toggle="tab" href="#{{$area->idArea}}">{{$area->nombreArea}}</a></li>
				@endforeach
			</ul>
			<div class="tab-content">
				@foreach($areas as $area)
					<div role="tabpanel" class="tab-pane" id="{{$area->idArea}}">
						<br/>
						<button type="button" class="btn btn-default pull-right btnCrear" data-toggle="modal" data-target="#servicioModal" value="{{$area->idArea}}">Crear Servicio</button>
						<br/><br/>
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
		</div>
	</div>

	<div class="modal fade" id="servicioModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        			<h4 class="modal-title" id="myModalLabel">Crear nuevo servicio</h4>
				</div>
				{{Form::open(array('route' => 'servicio/guarda'))}}				
				<div class="modal-body">
					{{Form::label('servicio','Nombre Servicio')}}
					{{Form::text('servicio','',array('class' => 'form-control', 'id' => 'nombreServicio' ))}}
					{{Form::hidden('area','',array('id' => 'area'))}}
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					{{Form::submit('Crear Servicio',array('class' => 'btn btn-primary'))}}
        		</div>
        		{{Form::close()}}
			</div>
		</div>
	</div>

@stop