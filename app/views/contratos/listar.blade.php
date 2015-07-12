@extends('layout')
@section('contenido')
<script type="text/javascript">
	$(document).ready(function(){
		$('#tblContrato').dataTable();

		$(".info").click(function(){
			$('#cargaModal').load('contratos/detalles/'+$(this).attr('href'));
		});
	});
</script>
<div class="row">
	<div class="col-md-11">
		<div class="panel panel-default">
			<div class="panel-heading">
					<h3 class="panel-title text-center">Contratos</h3>
			</div>
			<div class="panel-body">
				@if(Session::has('error'))
					<div class="alert alert-danger text-center alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<p>{{Session::get('error')}}</p>
					</div>
				@elseif(Session::has('success'))
					<div class="alert alert-success text-center alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<p>{{Session::get('success')}}</p>
					</div>
				@endif 
				<a href="{{URL::route('contratos/nuevo')}}" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus-sign"></span></a><br/><br/>
				<table class="table table-bordered table-hover table-striped" id="tblContrato">
					<thead>
						<tr class="active">
							<th>Emperesa</th>
							<th>Código</th>
							<th>Periodo</th>
							<th>Acciones</th>
						</tr>
					</thead>
					<tbody>
						@foreach($contratos as $contrato)
							<tr>
								<td>{{$contrato->nombreCliente}}</td>
								<td>{{$contrato->codigoContrato}}</td>
								<td>{{date("F-Y", strtotime($contrato->inicioContrato))}} a {{date("F-Y", strtotime($contrato->finContrato))}}</td>
								<td>

									<a href="{{$contrato->idContrato}}" data-toggle="modal" data-target="#infoContrato" class="info"><span class="glyphicon glyphicon-info-sign"></span></a>
									<a href="#" data-toggle="modal" data-target="#infoContrato"<span class="glyphicon glyphicon-trash"></span></a>
									<a href="{{URL::route('contratos/muestra',array($contrato->idContrato))}}"><span class="glyphicon glyphicon-plus-sign"></span>
								</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="infoContrato">
	<div id="cargaModal"></div>
</div>
@stop