<!DOCTYPE html>
<html lang="es-CL">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Ematel - Gestión</title>
	    {{ HTML::script('assets/js/jquery.js'); }}
		{{ HTML::script('assets/js/jquery-ui.min.js'); }}
		{{ HTML::script('assets/js/slidebars.min.js'); }}		
		{{ HTML::script('assets/js/jquery.dataTables.js'); }}
		{{ HTML::script('assets/js/bootstrap.js'); }}
		{{ HTML::style('assets/css/bootstrap.min.css'); }}
		{{ HTML::style('assets/css/slidebars.min.css'); }}
		{{ HTML::style('assets/css/dataTables.css'); }}
		{{ HTML::style('assets/css/jquery-ui.css'); }}
		<style type="text/css">
			#sidebar{
				background-color: #398ab9;
				min-height: 1451px;
			}

			#header{
				background-color: #398ab9;
				min-height: 
			}

			#menu > li > a{
				color: #FFF;
			}

			.logo{
				width: 170px;
				margin: 25px;
				display: block;
				text-align: center;
			}
		</style>
	</head>
	<body>
		<div class="navbar navbar-default sb-slide">
			<img class="img-rounded" src="{{asset('assets/images/emalogo.png')}}">
			<button class="btn btn-primry sb-toggle-left pull-right" id="btnShow">Link</button>
		</div>
		<div class="container sb-site">
			<div class="row">
				<div class="col-md-2 hidden-xs" id="sidebar">
					<a href="#" class="logo text-center" >
						<img src="{{asset('assets/images/user_vacio.jpg')}}" class="img-responsive img-circle center-block" width="100px" height="100" alt="logo">
						<p style="color:#FFF">Usuario</p>
					</a>
			<ul id="menu">
				<li><a href="#opt1" data-toggle="collapse" aria-controls="opt1"><i class="glyphicon glyphicon-bullhorn"></i> Noticias +</a></li>
				<ul class="collapse" id="opt1">
								<li>pimera</li>
								<li>segunda</li>
								<li>tercera</li>
							</ul>
						<li><a href="#"><i class="glyphicon glyphicon-barcode"></i> SIG</a></li>
						<li><a href="capacitacion.php"><i class="glyphicon glyphicon-book"></i> Capacitación <span class="label label-warning">1</span></a></li>
						<li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Panel de seguimiento <span class="label label-danger"><i class="glyphicon glyphicon-exclamation-sign"></i></span></a></li>
						<hr>
						<li><a href="administracion.php"><i class="glyphicon glyphicon-cog"></i> Administrar</a></li>
					</ul>
				</div>
	    		<div class="col-md-12 sb-slide">
		            @yield('contenido', 'Default Content')
		            <hr/>
			        <footer align="center">
						<h4>Hermes - Ematel S.A</h4>
			        </footer>
				</div><!-- <div class="col-md-10">-->
			</div><!-- <div class="row"> -->
		</div><!-- <div id="sb-site" class="container"> -->
		<div class="col-xs-2 sb-slidebar sb-left visible-xs" id="sidebar" role="navigation">
			<a href="#" class="logo text-center" >
				<img src="{{asset('assets/images/user_vacio.jpg')}}" class="img-responsive img-circle center-block" width="100px" height="100" alt="logo">
				<p style="color:#FFF">Usuario</p>
			</a>
			<ul id="menu">
				<li><a href="#opt1" data-toggle="collapse" aria-controls="opt1"><i class="glyphicon glyphicon-bullhorn"></i> Noticias +</a></li>
				<ul class="collapse" id="opt1">
								<li>pimera</li>
								<li>segunda</li>
								<li>tercera</li>
							</ul>
						<li><a href="#"><i class="glyphicon glyphicon-barcode"></i> SIG</a></li>
						<li><a href="capacitacion.php"><i class="glyphicon glyphicon-book"></i> Capacitación <span class="label label-warning">1</span></a></li>
						<li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Panel de seguimiento <span class="label label-danger"><i class="glyphicon glyphicon-exclamation-sign"></i></span></a></li>
						<hr>
						<li><a href="administracion.php"><i class="glyphicon glyphicon-cog"></i> Administrar</a></li>
					</ul>
				</div><!-- Sidebar -->	
		<script type="text/javascript">
			$(document).ready(function() {
				// Initiate Slidebars
				$.slidebars();
				//$.slidebars.open('left');
			});
		</script>
	</body>
</html>