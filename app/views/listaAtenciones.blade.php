<script type="text/javascript">
	$(document).ready(function(){
		$('#atenciones').dataTable({
			"oLanguage" : {
				"sProcessing":     "Procesando...",
			    "sLengthMenu":     "Mostrar _MENU_ registros",
			    "sZeroRecords":    "No se encontraron resultados",
			    "sEmptyTable":     "Ningún dato disponible en esta tabla",
			    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			    "sInfoPostFix":    "",
			    "sSearch":         "Buscar:",
			    "sUrl":            "",
			    "sInfoThousands":  ",",
			    "sLoadingRecords": "Cargando...",
			    "oPaginate": {
			        "sFirst":    "Primero",
			        "sLast":     "Último",
			        "sNext":     "Siguiente",
			        "sPrevious": "Anterior"
			    },
			    "oAria": {
			        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			    }
			}
		});
	});
</script>

<div class="panel panel-primary">
	<div class="panel-heading">Detalle de atenciones</div>
	<div class="panel-body">
		<table id="atenciones">
			<thead>
				<tr class="active">
					<th>Cliente</th>
					<th>Tipo</th>
					<th>Fecha recibida</th>
					<th>Fecha pactada</th>
					<th>Estado</th>
				</tr>
			</thead>
			<tbody>
				@foreach($fichas as $ficha)
					<tr>
						<td>{{$ficha->idCliente}}</td>
						<td>{{$ficha->detalleProblema}}</td>
						<td>Acciones</td>
					</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>