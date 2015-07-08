@extends('layout')
@section('contenido')
<div class="row">
	<div class="col-md-11">
		<div class="panel panel-default">
			<div class="panel-heading">
					<h3 class="panel-title text-center">Contratos</h3>
			</div>
			<div class="panel-body">
				<a href="{{URL::route('contratos/nuevo')}}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus-sign"></span></a><br/><br/>
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
						@foreach($contratos as $contrato)
							<tr>
								<td>{{$contrato->nombreCliente}}</td>
								<td>{{'area'}}</td>
								<td>{{date("F-Y", strtotime($contrato->inicioContrato))}} a {{date("F-Y", strtotime($contrato->finContrato))}}</td>
								<td>

									<span class="glyphicon glyphicon-info-sign" data-toggle="modal" data-target="#infoContrato"></span>
									<span class="glyphicon glyphicon-trash"></span>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
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