@extends('layout')
@section('contenido')
	<script type="text/javascript">
		$(document).ready(function(){
			$('#atenciones').dataTable();
			$('#emergencias').dataTable();
			$('[data-toggle="tooltip"]').tooltip()
			$('#fPactada').datepicker();
		});
	</script>
	<div class="container" id="titulo">
		<div class="row">
			<div class="col-md-11">
				<h4>Mis Mantenciones</h4>
			</div>
		</div>
	</div>
	<!--<div class="container">
		<div class="row">
			<div class="col-lg-11">
				<div class="alert alert-info alert-dismissible" role="alert" id="info">
			  	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			  	<p><span class="glyphicon glyphicon-info-sign"></span> En esta pantalla se presentan las mantenciones del mes actual</p>
				</div>
			</div>
		</div>
	</div>-->

	<div class="container">
		<div class="row">
			<div class="col-md-11">
				<div class="panel panel-danger">
					<div class="panel-heading text-center"><h3 class="panel-title">Mis emergencias</h3></div>
					<div class="panel-body">
						<table id="emergencias" class="table table-striped table-hover table-bordered">
							<thead>
								<tr class="active">
									<th>Cliente</th>
									<th>Fecha pactada</th>
									<th>Estado</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($emergencias as $emergencia)
									<tr>
										<td>{{$emergencia->nombreCliente}}</td>
										<td>{{$emergencia->fechaPactada}}</td>
											@if($emergencia->estado == 0)
												<td>No realizada</td>
											@elseif($emergencia->estado == 1)
												<td>Asignada</td>
											@else
												<td>Realizada</td>
											@endif
										<td>
											<a href="{{URL::route('mantencion/equipo',array($emergencia->idAtencion))}}" class="btn btn-info"><span class="fa fa-info-circle"></span></a> 
											<a href="{{URL::route('mantencion/equipo',array($emergencia->idAtencion))}}" class="btn btn-success"><span class="fa fa-check-circle"></span></a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-11">
				<div class="panel panel-primary">
					<div class="panel-heading text-center"><h3 class="panel-title">Mis mantenciones</h3></div>
					<div class="panel-body">
						<table id="atenciones" class="table table-striped table-hover table-bordered">
							<thead>
								<tr class="active">
									<th>Cliente</th>
									<th>Fecha pactada</th>
									<th>Estado</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($fichas as $ficha)
									<tr>
										<td>{{$ficha->nombreCliente}}</td>
										<td>{{$ficha->fechaPactada}}</td>
											@if($ficha->estado == 0)
												<td>No realizada</td>
											@elseif($ficha->estado == 1)
												<td>Asignada</td>
											@else
												<td>Realizada</td>
											@endif
										<td>
											<a href="{{URL::route('mantencion/equipo',array($ficha->idAtencion))}}" class="btn btn-info"><span class="fa fa-info-circle"></span></a>
											<a href="{{URL::route('mantencion/equipo',array($ficha->idAtencion))}}" class="btn btn-success"><span class="fa fa-check-circle"></span></a>
										</td>
									</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="modal fade" id="modalProducto">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header" style="background-color: #3784b1; color: #fff">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
        			<h4 class="modal-title">Añadir mantención</h4>
      			</div>
      			<div class="modal-body">
      				{{ Form::open(array('route' => 'ficha/guardar'))}}
      				{{ Form::label('cliente', 'Cliente')}}
      				{{ Form::select('cliente',$clientes,'',array('class' => 'form-control'))}}
      				{{ Form::label('fechaPactada','Fecha pactada')}}
      				{{ Form::text('fechaPactada','',array('class' => 'form-control', 'id' => "fPactada"))}}
      				{{ Form::label('empleado', 'Empleado')}}
      				{{ Form::select('empleado',$empleados,'',array('class' => 'form-control'))}}
      				{{ Form::label('area','Área de servicio')}}
      				{{ Form::select('area',$areas,'',array('class' => 'form-control'))}}
					{{ Form::label('detalleAtencion','Detalle atención')}}
					{{ Form::textarea('detalleAtencion','',array('class' => 'form-control'))}}
					{{ Form::label('precio','Valorización')}}
					<div class="input-group">
						<span class="input-group-addon">$</span>
						{{ Form::text('precio','',array('class' => 'form-control'))}}
					</div>
      				{{ Form::close()}}
      			</div>
      			<div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        <button type="button" class="btn btn-primary">Añadir</button>
		      </div>
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
@stop