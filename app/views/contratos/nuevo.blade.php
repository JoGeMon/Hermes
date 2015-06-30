@extends('layout')
@section('contenido')
<div class="row">
	<div class="col-md-11">
		<div class="panel panel-default">
			<div class="panel-heading">
					<h3 class="panel-title text-center">Crear Contrato</h3>
			</div>
			<div class="panel-body">
				{{Form::open(array('class' => 'form-horizontal' ))}}
					<div class="form-group">
						{{ Form::label('cliente', 'Cliente', array('class' => 'col-sm-1 control-label'))}}
						<div class="col-sm-6">
							{{ Form::select('cliente',$clientes,'',array('class' => 'form-control'))}}
						</div>
					</div>
						{{Form::label('IdContrato', 'ID Contrato', array('class' => 'col-sm-1 control-label'))}}
						<div class="col-sm-2">
							{{Form::text('idContrato','',array('id' => 'idContrato', 'class' => 'form-control'))}}
						</div>
					<div class="form-group">
						{{ Form::label('area','Área de servicio', array('class' => 'col-sm-2 control-label'))}}
						<div class="col-sm-10">
			      			{{ Form::select('area',$areas,'',array('class' => 'form-control'))}}
			      		</div>
			      	</div>
				{{Form::close()}}
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Guardar</button>
			</div>
		</div>
	</div>
</div>
@stop