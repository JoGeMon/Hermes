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
		{{ HTML::script('assets/js/dataTables.bootstrap.js'); }}
		{{ HTML::script('assets/js/bootstrap.js'); }}
		{{ HTML::style('assets/css/bootstrap.min.css'); }}
		{{ HTML::style('assets/css/slidebars.min.css'); }}
		{{-- HTML::style('assets/css/dataTables.css'); --}}
		{{ HTML::style('assets/css/font-awesome.css') }}
		{{ HTML::style('assets/css/dataTables.bootstrap.css') }}
		{{ HTML::style('assets/css/jquery-ui.css') }}
		{{ App::setLocale('es') }}
		<style type="text/css">
			#sidebar{
				background-color: #398ab9;
				margin-top: 50px;
			}

			#sidebarLG{
				background-color: #2A205B;
				min-height: 750px;
			}

			#header{
				background-color: #2A205B;
				height: 100px;
			}

			#menu  a{
				background-color: #2A205B;
				color: #FFF;
				border: 0px solid #2A205B;
			}

			#menu  a:hover{
				background-color: #FFF;
				color: #000;
				border: 0px solid #2A205B;
			}

			.logo{
				margin-right: 25px; 
				text-align: -moz-center;
				margin-top: 15px;
			}

			.logoHermes{
				height: 140px;
				margin-left: 50px;
				margin-top: -80px;
			}

			.panel-heading h4 {
				color: #FFF;
				font-size: 15px;
				font-weight: 600;
				margin: 0;
			}

			#titulo{
				background-color: #2A205B;
				color: #FFF;
				margin-bottom: 10px;
			}
	</style>
	</head>
	<body>
		<div class="fluid-container" id="header">
			<div class="row">
				<div class="col-md-2 text-center">
					<a href="#"></a>
				</div>
				<div class="col-md-10">
					<h3 style="color:#FFF; margin-top: 50px" class="pull-left">{{Session::get('usuario')->nombreEmpleado." ".Session::get('usuario')->apellidoPaternoEmpleado}}</h3>
					<img class="logo pull-right" src="{{asset('assets/images/emalogo.png')}}"/>
					<button class="btn btn-primry sb-toggle-left pull-right visible-xs" id="btnShow">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
			</div>
		</div>
		<div class="fluid-container sb-site">
			<div class="row">
				<div class="col-lg-2 col-md-2 hidden-sm hidden-xs" id="sidebarLG">
					<div class="text-center">
						<img class="logoHermes visible-lg text-center" src="{{asset('assets/images/hermesLogo.png')}}">
					</div>
					<hr>
					<div id="menu" class="list-group">
						<a href="{{URL::route('mantenciones')}}" class="list-group-item"><i class="glyphicon glyphicon-th-list"></i> Mantenciones</a>
						<a href="{{URL::route('contratos')}}" class="list-group-item"><i class="glyphicon glyphicon-list-alt"></i> Contratos</a>
						<a href="{{URL::route('emergencias')}}" class="list-group-item"><i class="glyphicon glyphicon-exclamation-sign"></i> Emergencias</a>
						<a href="{{URL::route('mantenciones/usuario/id')}}" class="list-group-item"><i class="glyphicon glyphicon-wrench"></i> Mis mantenciones</a>
						<a href="{{URL::route('dashboard')}}" class="list-group-item"><i class="fa fa-pie-chart"></i> Panel de seguimiento </a>
						<hr>
						<a href="administracion.php" class="list-group-item"><i class="glyphicon glyphicon-cog"></i> Administrar</a>
						<a href="{{URL::route('servicios')}}" class="list-group-item"><i class="glyphicon glyphicon-wrench"></i> Equipos</a>
						<a href="{{URL::route('servicios')}}" class="list-group-item"><i class="fa fa-users"></i> Clientes</a>
						<a href="{{URL::route('servicios')}}" class="list-group-item"><i class="fa fa-user"></i> Trabajadores</a>
					</div>
				</div>
	    		<div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
	    			<br/>
		            @yield('contenido', 'Default Content')
		            <hr/>
			        <footer class="text-center fixed-bottom">
						<h4>Hermes - Ematel S.A</h4>
			        </footer>
				</div><!-- <div class="col-md-10">-->
			</div><!-- <div class="row"> -->
		</div><!-- <div id="sb-site" class="container"> -->
		<div class="col-xs-2 sb-slidebar sb-left sb-style-overlay visibl-xs sb-width.wide" id="sidebar" role="navigation">
			<a href="#" class="logo text-center" >
				<img src="{{asset('assets/images/user_vacio.jpg')}}" class="img-responsive img-circle center-block" width="100px" height="100" alt="logo">
				<p style="color:#FFF">Usuario</p>
			</a>
			<ul id="menu" style="list-style-type:none; padding-left: 0px;">
				<li style="padding: 10px"><a href="#opt1" data-toggle="collapse" aria-controls="opt1"><i class="glyphicon glyphicon-bullhorn"></i> Mantenciones</a></li>
				<ul class="collapse" id="opt1" style="list-style-type: none;">
					<li><a href="#" style="color: #FFF">Ingresar</a></li>
					<li><a href="{{URL::route('mantenciones')}}" style="color: #FFF">Listar</a></li>
					<li><a href="#">Ingresar</a></li>
				</ul>
				<li style="padding: 10px"><a href="#"><i class="glyphicon glyphicon-barcode"></i> SIG</a></li>
				<li style="padding: 10px"><a href="capacitacion.php"><i class="glyphicon glyphicon-book"></i> Capacitación <span class="label label-warning">1</span></a></li>
				<li style="padding: 10px"><a href="#"><i class="fa fa-pie-chart"></i> Panel de seguimiento <span class="label label-danger"><i class="glyphicon glyphicon-exclamation-sign"></i></span></a></li>
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