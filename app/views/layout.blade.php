<!DOCTYPE html>
<html lang="es-CL">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Ematel - Gestión</title>
	</head>
	<style type="text/css">
		body{
			padding-top: 20px;
			padding-bottom: 20px;
			background-color: #FFF;
			background-repeat: repeat-x;
			background-image:url('assets/images/palitoFondo.jpg');
		}

		.container{
			border: 10px solid #428bca;
;
		}
	</style>

	{{ HTML::script('assets/js/jquery.js'); }}
	{{ HTML::script('assets/js/jquery-ui.min.js'); }}
	{{ HTML::script('assets/js/jquery.dataTables.js'); }}
	{{ HTML::script('assets/js/bootstrap.js'); }}
	{{ HTML::style('assets/css/bootstrap.min.css'); }}
	{{ HTML::style('assets/css/dataTables.css'); }}
	{{ HTML::style('assets/css/jquery-ui.css'); }}
	<body>
		<div class="container" style="background-color: #FFF">
			<div class="header" align="center">
					<h3>Ficha de atención</h3>
			</div>
			@yield('contenido', 'Default Content')
			<footer align="center">
				<p>Hermes BI - Ematel</p>
			</footer>
		</div>
	</body>
</html>