{{ Form::label('cliente','Nombre Cliente')}}
{{ Form::text('cliente',$cliente->nombreCliente,array('class' => 'form-control', 'readonly' =>  'true', 'id' => 'cliente'))}}