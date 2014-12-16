<!DOCTYPE html>
<html lang="es-CL">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Ematel - Gestión</title>
	</head>
	{{ HTML::script('assets/js/jquery.js'); }}
	{{ HTML::script('assets/js/jquery-ui.min.js'); }}
	{{ HTML::script('assets/js/jquery.dataTables.js'); }}
	{{ HTML::script('assets/js/bootstrap.js'); }}
	{{ HTML::style('assets/css/bootstrap.min.css'); }}
	{{ HTML::style('assets/css/dataTables.css'); }}
	{{ HTML::style('assets/css/jquery-ui.css'); }}
	<style type="text/css">
		#opc{
			opacity: 0.2;
			background-color: grey;
		}

		body{
			padding-top: 20px;
			padding-bottom: 20px;
			background-color: #FFF;
			background-repeat: repeat-x;
			background-image:url('assets/images/palitoFondo.jpg');
		}
	</style>
	<body>
		<div class="container" style="background-color: #FFF">
			<div class="row">
				<div class="col-lg-12">
					<header class"header" align="center"><h3>Logo Ematel</h3></header>
					<div class="well" id="opc">
						<div class="col-lg-6" align="center">Uno</div>
						<div class="col-lg-6" align="center">Otro</div>
					</div>
					<footer align="center">
						<p>Hermes BI - Ematel</p>
					</footer>
				</div>
			</div>
		</div>
	</body>
</html>