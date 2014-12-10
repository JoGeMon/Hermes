@extends('layout')
	@section('contenido')
	<script type="text/javascript">
		$(document).ready(function(){
			$('#lista').load('ficha/listar');
			//$('#crear').hide();
			$('#cerrar').click(function(){
				$('#crear').hide();
			});
			$( "#datepicker" ).datepicker({ dateFormat: "dd-mm-yy" });
	
		});
	</script>

	<div class="row">
		<div class="col-lg-12 text-center">
			<div class="alert alert-warning">
				<p>La siguiente ficha tiene por objetivo, informar sobre las distintas atenciones realizadas por el área de producción. Se solicita rigurosidad a la hora de llenar los datos.</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div id="crear">
				<div class="panel panel-primary">
					<div class="panel-heading">Ingreso de requerimiento</div>
					<div class="panel-body">
						{{ Form::open(array('route' => 'ficha/guardar')) }}
						<div class="row">
							<div class="col-lg-6">
								{{ Form::label('rutCliente','RUT cliente')}}
								{{ Form::text('rutCliente','',array('class' => 'form-control'))}}
							</div>
							<div class="col-lg-3">
								{{ Form::label('tipoAtencion','Tipo de atención')}}
								{{ Form::select('tipoAtencion',array(
									'' => 'Selecciona una opción',
									'1' => "Mantención",
									'2' => "Emeregencia"
									),'',array('class' => 'form-control'))}}
							</div>
							<div class="col-lg-3">
								{{Form::label('fechaPactada','Fecha de atención')}}
								{{Form::text('fechaPactada','',array('class' => 'form-control', 'id' => 'datepicker'))}}
							</div>
						</div>
						<div class="row">
							<div class="col-lg-12">
								{{ Form::label('cliente','Nombre Cliente')}}
								{{ Form::text('cliente','',array('class' => 'form-control', 'readonly' =>  'true'))}}
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-lg-3">
								<button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalProducto"><span class="glyphicon glyphicon-plus-sign"></span> Añadir atención</button>
							</div>
						</div>
						<br/>
						<div class="row">
							<div class="col-lg-12" align="right">
								<a href="" class="btn btn-danger" id="cerrar">Cerrar</a>
								{{Form::submit('Crear',array('class' => 'btn btn-primary'))}}
							</div>
						</div>
						{{ Form::close() }}
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-lg-12">
			<div id="lista"></div>
		</div>
	</div>

	<div class="modal fade" id="modalProducto">
  		<div class="modal-dialog">
    		<div class="modal-content">
      			<div class="modal-header" style="background-color: #3784b1; color: #fff">
        			<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span></button>
        			<h4 class="modal-title">Añadir atención</h4>
      			</div>
      			<div class="modal-body">
      				{{ Form::open(array('route' => 'ficha/guardar'))}}
      				{{ Form::label('area','Área de servicio')}}
      				{{ Form::select('area',array(
								'' => 'Selecciona un área',
								'1' => "Bombas de agua",
								'2' => "Grupos Electrógenos",
								'3' => "Portones",
								'4' => "Calderas",
								'5' => "Proyectos",
								),'',array('class' => 'form-control'))}}
					
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