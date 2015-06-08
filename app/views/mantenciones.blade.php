@extends('layout')
@section('contenido')
	<script type="text/javascript">
		$(document).ready(function(){
			$(".tab-pane:first").addClass('active');
			$(".propia:first").addClass('active');
		});
	</script>

	<ul class="nav nav-tabs">
		@foreach($empleados as $empleado)
			<li role="presentation" class="propia"><a data-toggle="tab" href="#{{$empleado->idEmpleado}}">{{$empleado->apellidoPaternoEmpleado}}</a></li>
		@endforeach
	</ul>
	<div class="tab-content">
	@foreach($empleados as $empleado)
		<div role="tabpanel" class="tab-pane" id="{{$empleado->idEmpleado}}">una caja</div>
	@endforeach
	</div>
@stop