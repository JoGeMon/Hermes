@extends('layout')
@section('contenido')
<style type="text/css">
iframe{
	width: 100%;
	height: 600px;
}
</style>
<div class="col-md-12">
	<iframe src="http://localhost:8080/pentaho/api/repos/%3Apublic%3AdePrueba.wcdf/generatedContent?ts=1447622346360?userid=admin&password=password"></iframe>
</div>
@stop