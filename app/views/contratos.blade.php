@extends('layout')
@section('contenido')
<div class="row">
	<div class="col-md-11">
		<div class="panel panel-default">
			<div class="panel-heading">
					<h3 class="panel-title text-center">Contratos</h3>
			</div>
			<div class="panel-body">
				<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#creaContrato">
					<span class="glyphicon glyphicon-plus-sign"></span>
				</button><br/>
				<table class="table table-bordered table-hover table-striped">
					<thead>
						<tr class="active">
							<th>Emperesa</th>
							<th>Área</th>
							<th>Meses</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Empresa 1</td>
							<td>Area 1</td>
							<td>Agosto a Junio</td>
							<td>
								<span class="glyphicon glyphicon-info-sign" data-toggle="modal" data-target="#infoContrato"></span>
								<span class="glyphicon glyphicon-trash"></span>
							</td>
						</tr>
						<tr>
							<td>Empresa 2</td>
							<td>Area 2</td>
							<td>Agosto a Junio</td>
							<td>
								<span class="glyphicon glyphicon-info-sign" data-toggle="modal" data-target="#infoContrato"></span>
								<span class="glyphicon glyphicon-trash"></span>
							</td>
						</tr>
						<tr>
							<td>Empresa 3</td>
							<td>Area 3</td>
							<td>Agosto a Junio</td>
							<td>
								<span class="glyphicon glyphicon-info-sign" data-toggle="modal" data-target="#infoContrato"></span>
								<span class="glyphicon glyphicon-trash"></span>							
							</td>
						</tr>
						<tr>
							<td>Empresa 4</td>
							<td>Area 4</td>
							<td>Agosto a Junio</td>
							<td>
								<span class="glyphicon glyphicon-info-sign" data-toggle="modal" data-target="#infoContrato"></span>
								<span class="glyphicon glyphicon-trash"></span>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="creaContrato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title">Crear contrato</h4>
			</div>
			<div class="modal-body">
				{{Form::open(array())}}
					{{ Form::label('cliente', 'Cliente')}}
					{{ Form::select('cliente',$clientes,'',array('class' => 'form-control'))}}
					{{ Form::label('area','Área de servicio')}}
			      	{{ Form::select('area',$areas,'',array('class' => 'form-control'))}}
				{{Form::close()}}
			</div>
			<div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Guardar</button>
      		</div>
		</div>
	</div>
</div>


<div class="modal fade" id="infoContrato" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #398ab9; color:#FFF">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title text-center">Contrato de atención</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
						<th>Nombre Cliente</th>
						<td>Cliente ?</td>
					</tr>
					<tr>
						<th>Fecha de Diagnóstico</th>
						<td>{{date('d-F-Y');}}</td>
					</tr>
					<tr>
						<th>Aárea de Servicio</th>
						<td>Area X</td>
					</tr>
				</table>
				<hr>
				<div class="alert alert-info">Cuadro de frecuencia</div>
				<p>Acciones</p>
				<table class="table table-bordered">
					<thead>
						<tr class="active text-center">
							<th>Mes</th>
							<th>Área</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Junio</td>
							<td>Bombas</td>
						</tr>
						<tr>
							<td>Junio</td>
							<td>Portones</td>
						</tr>
						<tr>
							<td>Junio</td>
							<td>Tableros</td>
						</tr>
					</tbody>
				</table>
				<textarea class="form-control" placeholder="Cometarios"></textarea><br/>
				<textarea class="form-control" placeholder="Presupuesto"></textarea>
			</div>
			<div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Guardar</button>
      		</div>
		</div>
	</div>
</div>
@stop