@extends('layout')
@section('contenido')
	<style type="text/css">
		#titulo{
			background-color: #398ab9;
			color: #FFF;
			margin-bottom: 10px;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#atenciones').dataTable();
			$('[data-toggle="tooltip"]').tooltip()
			$('#fLlmada').datepicker();
		});
	</script>
	<div class="container-fluid" id="titulo">
		<div class="row">
			<div class="col-md-11">
				<div class="col-md-4">
					<h3>Emergencias</h3>
				</div>
				<div class="col-md-8 text-right">
					<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalProducto"><span class="glyphicon glyphicon-plus-sign"></span></button>
				</div>
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
			<div class="col-lg-11">
				<div class="panel panel-default">
					<div class="panel-heading text-center"><a href="#"><span class="pull-left glyphicon glyphicon-chevron-left">{{date('d-m-Y',strtotime('-1 day'))}}</span></a>{{date('d-F-Y')}} <span class="glyphicon glyphicon-info-sign" data-toggle="tooltip" data-placement="top" title="Mantenciones del mes"></span><a href="#"><span class="pull-right glyphicon glyphicon-chevron-right"></span></a></div>
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
											@if($ficha->estado == 0)
												<td>No realizada</td>
											@elseif($ficha->estado == 1)
												<td>Asignada</td>
											@else
												<td>Realizada</td>
											@endif
										<td>
											<a href="{{URL::route('mantencion/equipo',array($ficha->idAtencion))}}"><span class="fa fa-info-circle"></span></a> 
											<a href="{{URL::route('mantencion/equipo',array($ficha->idAtencion))}}"><span class="fa fa-users"></span></a>
											<a href="{{URL::route('mantencion/equipo',array($ficha->idAtencion))}}"><span class="fa fa-edit"></span></a>
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
        			<h4 class="modal-title">Añadir Emergencia</h4>
      			</div>
      			<div class="modal-body">
      				{{ Form::open(array('route' => 'emergencia/guardar'))}}
      				<div class="row">
						<div class="col-md-6 col-xs-6">
							{{Form::label('fechaLlamda', "Fecha llamada")}}
							{{Form::text('fechaLlamda', "",array('id' => 'fLlmada', 'class' => 'form-control'))}}
						</div>
						<div class="col-md-6 col-xs-6">
							{{Form::label('horaLlamda', "Hora llamada")}}
							{{Form::text('horaLlamda', "", array('placeHolder' => '13:30', 'class' => 'form-control'))}}
						</div>
      				</div>
      				{{ Form::label('cliente', 'Cliente')}}
      				{{ Form::select('cliente',$contratos,'',array('class' => 'form-control'))}}
      				{{ Form::label('area','Área de servicio')}}
      				{{ Form::select('area',$areas,'',array('class' => 'form-control'))}}
					{{ Form::label('motivo','Motivo')}}
					{{ Form::textarea('detalleAtencion','',array('class' => 'form-control'))}}

      			</div>
      			<div class="modal-footer">
			        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			        {{Form::submit('Añadir',array('class' => 'btn btn-primary'))}}
				</div>
				{{ Form::close()}}
    		</div><!-- /.modal-content -->
  		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->
@stop