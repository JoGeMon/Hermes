<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hermes - Ematel</title>
    <link rel="stylesheet" href="bs3/dist/css/bootstrap.css"/>
	<script src="bs3/assets/js/jquery.js"></script>
	<script src="bs3/assets/js/holder.js"></script>
    <script src="bs3/dist/js/bootstrap.min.js"></script>
	<script>
	$(document).ready(function(){
		$('#importantes').carousel();
	})
	</script>
</head>
<body>
<div class="container">
	<header>
		<div class="page-header">
			<h1><img src="img/logo.png"></h1>
		</div>
    </header>
    <div class="row">
    	<div class="col-xs-12 col-sm-9 hidden-xs">
			<div class="carousel slide" id="importantes">
				<ol class="carousel-indicators">
                	<li data-target="#importantes" data-slide-to="0" class="active"></li>
                	<li data-target="#importantes" data-slide-to="1"></li>
                	<li data-target="#importantes" data-slide-to="2"></li>
                </ol>
				
				<div class="carousel-inner">
                    <div class="item active">
                        <img data-src="holder.js/840x400/sky/text:Primer consejo de seguridad" alt="First slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Ejemplo 1</h1>
                                <p>Baja del ejemplo que se deberá ver bonita</p>
                            </div>
                        </div>
                    </div>
					
                    <div class="item">
                        <img data-src="holder.js/840x400/vine/text:Segunda slide" alt="Second slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Ejemplo 2</h1>
                                <p>Otra bajada de texto</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img data-src="holder.js/840x400/industrial/text:Tercera slide" alt="Third slide">
                        <div class="container">
                            <div class="carousel-caption">
                                <h1>Ejemplo 3</h1>
                                <p>Debiera ser la última</p>
                            </div>
                        </div>
                    </div>	
                </div><!-- <div class="carousel-inner"> -->
				<a class="left carousel-control" href="#importantes" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
				<a class="right carousel-control" href="#importantes" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
			</div><!--<div class="carousel slide" id="importantes">-->
		</div><!--<div class="col-xs-12 col-sm-9">-->
        
		<div class="col-xs-6 col-sm-3">
        	<div class="well">
	            <h4>Login</h4>
    	        <form role="form" action="home.php">
            	<div class="input-group">
                	<span class="input-group-addon glyphicon glyphicon-user"></span>
                    <input type="text" class="form-control" required placeholder="Usuario"/>
                </div>
            	<div class="input-group">
                	<span class="input-group-addon glyphicon glyphicon-lock"></span>
                    <input type="password" class="form-control" required placeholder="Contraseña"/>
                </div>
                <br/>
				<div class="form-group" align="center">
                <button type="submit" class="btn btn-info" style="text-align:center; width:100%"><span class="glyphicon glyphicon-log-in"></span> Entrar</button>
                </div>
            	</form>
            	<br/>
                <p class="hidden-xs">El sistema permite acceder a: </p>
		        <ul class="hidden-xs">
                	<li>Conocer noticias relacionadas a la empresa</li>
					<li>Acceder a módulos de capacitación para zonales</li>
					<li>Utilizar los procedimientos e instructivos de SIG</li>
				</ul>
            </div><!--<div class="well">-->
		</div><!--<div class="col-xs-6 col-sm-3">-->
	</div><!--<div class="row">-->
    <hr/>
</div>
</body>
</html>
