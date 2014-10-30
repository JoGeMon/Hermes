<!DOCTYPE html>
<html lang="es-CL">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	</head>
	{{ HTML::script('assets/js/jquery.js'); }}
	{{ HTML::script('assets/js/jquery.dataTables.js'); }}
	{{ HTML::script('assets/js/bootstrap.js'); }}
	{{ HTML::style('assets/css/bootstrap.min.css'); }}
	{{ HTML::style('assets/css/dataTables.css'); }}
	<body>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="page-header">
						<h3>Ficha de atención</h3>
					</div>			
					@yield('contenido', 'Default Content')
					<br/>
					<footer align="center">
						<p>Hermes BI - Ematel</p>
					</footer>
				</div>
			</div>
		</div>
	</body>
</html>