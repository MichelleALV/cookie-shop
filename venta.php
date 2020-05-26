<?php
	$con=mysqli_connect('localhost', 'root', '', 'cookieshop') or die('Error en la conexion del servidor');
	$sql= "INSERT INTO `cliente` (`id`, `nombre`, `apellido`, `telefono`, `correo`) VALUES 
		(NULL,  '".$_POST["nombre"]."',
			 	'".$_POST["apellido"]."',
			 	'".$_POST["telefono"]."',  
	      	    '".$_POST["correo"]."')";
	$resultado=mysqli_query($con, $sql) or die('Error en el querry database');
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<center>
<img height="750" width="1150" src="fondo2.jpg" />
</center>
<head>
	<title>Venta</title>
	<style>
		.box{
			position: absolute;
    		left: 50%;
    		top: 50%;
    		transform: translate(-50%,-50%);
    		background-color: #E59866  ;
    		border-radius: 10px;
    		padding: 30px 80px;
    		background-color: rgba(0, 0, 0, 0.89);

		}
		.titulo{
			font-family: monospace; 
			font-size: 40px;
			color: #D35400;
		}
		.text{
			font-family: sans-serif;
			font-size: 18px;
			color: #D35400;
			display: block;
		}
		.caja{
			background: none;
    		font-size: 15px;
    		padding: 10px 10px 10px 5px;
    		display: block;
    		width: 320px;
    		border: none;
    		border-bottom: 2px solid #D35400;
    		box-sizing: border-box;
    		font-family: inherit;
  			outline: 0;
  			color: #ffffff;
		}
		.button{
			color:#fff;
			background-color: #D35400;
			outline: none;
  		  	border: 0;
    		color: #fff;
			padding:10px 20px;
			text-transform:uppercase;
			margin-top:30px;
			border-radius:5px;
			cursor:pointer;
			position:relative;	
			top: 5px;
			border: 6px solid #D35400;
		}
	</style>
</head>
<body bgcolor="#E59866">
	<div class="box">
		<form action="seleccion_de_galleta.php" method="POST">
		<h1 class="titulo">Tipo de paquete</h1>
		<p class="text">Selecciona el tipo de paquete</p>
	<label class="text">
		<br>
		<input type="radio" name="tipo" value="individual">Individual
		<br>
		<input type="radio" name="tipo" value="paquete">Paquete de tres
		<br>
		<input type="radio" name="tipo" value="caja">Caja
		<br><br>
		¿Cuántas piezas requiere?<input class="caja" type="text" name="piezas"><br>
	</label>
		<input hspace="60%" class="button" type="submit" name="enviar" value="Siguiente">
		</form>
	</div>
</body>
</html>