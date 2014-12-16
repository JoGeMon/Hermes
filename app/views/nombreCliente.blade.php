{{ Form::label('cliente','Nombre Cliente')}}
{{ Form::text('cliente',$nombreCliente,array('class' => 'form-control', 'readonly' =>  'true', 'id' => 'cliente'))}}