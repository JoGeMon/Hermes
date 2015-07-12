<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header" style="background-color: #398ab9; color:#FFF">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title text-center">Detalle de contrato</h4>
			</div>
			<div class="modal-body">
				<table class="table table-bordered">
					<tr>
						<th>Nombre Cliente</th>
						<td>{{$contrato->nombreCliente}}</td>
					</tr>
					<tr>
						<th>Fecha de Firma</th>
						<td>{{date('d-F-Y',strtotime($contrato->fechaFirma));}}</td>
					</tr>
					<tr>
						<th>Facturación</th>
						<td>{{$contrato->detalleFacturacion}}</td>
					</tr>
					<tr>
						<th>Contraparte</th>
						<td>{{$contrato->nombreFirmante}}</td>
					</tr>
				</table>
				<hr>
				@if(count($servicios)>0)
					<h4>Servicios</h4>
					<table class="table table-bordered">
						<thead>
							<tr class="active text-center">
								<th>Equipo</th>
								<th>Valor</th>
							</tr>
						</thead>
						<tbody>
							@foreach($servicios as $servicio)
							<tr>
								<td>{{$servicio->detalleServicio}}</td>
								<td>{{$servicio->valor}}</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				@else
					<h5 class="alert alert-block alert-warning text-center">Este contrato no tiene servicios</h5>
				@endif
			</div>
			<div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      		</div>
		</div>
	</div>