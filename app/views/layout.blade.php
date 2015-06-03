<!DOCTYPE html>
<html lang="es-CL">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Ematel - Gestión</title>
	    {{ HTML::script('assets/js/jquery.js'); }}
		{{ HTML::script('assets/js/jquery-ui.min.js'); }}
		{{ HTML::style('assets/js/slidebars.min.js'); }}		
		{{ HTML::script('assets/js/jquery.dataTables.js'); }}
		{{ HTML::script('assets/js/bootstrap.js'); }}
		{{ HTML::style('assets/css/bootstrap.min.css'); }}
		{{ HTML::style('assets/css/slidebars.min.css'); }}
		{{ HTML::style('assets/css/dataTables.css'); }}
		{{ HTML::style('assets/css/jquery-ui.css'); }}
	</head>
	<style type="text/css">
		#sidebar{
			background-color: #398ab9;
			min-height: 1451px;
		}

		#menu > li > a{
			color: #FFF;
		}
	</style>
	<script type="text/javascript">
		$(document).ready(function(){
			var lateral = new $.slidebars();
			//$.slidebars();
			$('btnShow').on('click',function(){
				lateral.slidebars.toggle('left');
			});
		});
	</script>
	<body>
		<div id="sb-site" class="container">
    		<div class="col-md-12">
				<nav class="navbar navbar-default" role="navigation">
					<img class="img-rounded" src="{{asset('assets/images/cabecera.jpg')}}" width="100%">
				      	<div class="collapse navbar-collapse navbar-ex1-collapse">
			              	<ul class="nav navbar-nav">
		                   	<li><a href="#">Mision y visión</a></li>
		                   	<li><a href="#">FAQ</a></li>
		               	</ul>
		           	</div>
				</nav><!--<nav class="navbar navbar-default" role="navigation">-->
				<button class="btn btn-primry" id="btnShow">Link</button>
	            @yield('contenido', 'Default Content')
	            <hr/>
		        <footer align="center">
					<h4>Hermes - Ematel S.A</h4>
		        </footer>
			</div><!-- <div class="col-md-12">-->
		</div><!-- <div id="sb-site" class="container"> -->

		<div class="col-md-2 sb-slidebar sb-left" id="sidebar" role="navigation">
	       	<ul id="menu">
	          	<li><a href="#"><i class="glyphicon glyphicon-bullhorn"></i> Noticias</a></li>
	           	<li><a href="#"><i class="glyphicon glyphicon-barcode"></i> SIG</a></li>
				<li><a href="capacitacion.php"><i class="glyphicon glyphicon-book"></i> Capacitación <span class="label label-warning">1</span></a></li>
				<li><a href="#"><i class="glyphicon glyphicon-dashboard"></i> Panel de seguimiento <span class="label label-danger"><i class="glyphicon glyphicon-exclamation-sign"></i></span></a></li>
				<hr>
				<li><a href="administracion.php"><i class="glyphicon glyphicon-cog"></i> Administrar</a></li>
			</ul>
		</div><!-- Sidebar -->
	</body>
</html>