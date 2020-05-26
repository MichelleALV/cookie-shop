<?php
	$con=mysqli_connect('localhost', 'root', '', 'cookieshop') or die('Error en la conexion del servidor');
	$sql= "INSERT INTO `seleccion_de_galleta` (`id`, `forma`, `colores`, `tematica`) VALUES 
		(NULL,  '".$_POST["forma"]."', 
	       		'".$_POST["color"]."', 
	      	    '".$_POST["tematica"]."')";
	$resultado=mysqli_query($con, $sql) or die('Error en el querry database');
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<center>
<img height="750" width="1150" src="fondo4.jpg" /><head>
</center>
<head>
	<title>Selección de decoración</title>
	<style>
		.box{
			position: absolute;
    		left: 50%;
    		top: 50%;
    		transform: translate(-50%,-50%);
    		background-color: #E59866  ;
    		border-radius: 10px;
    		padding: 30px 60px;
    		background-color: rgba(0, 0, 0, 0.89);
		}
		.titulo{
			font-family: monospace; 
			font-size: 30px;
			color: #D35400;
		}
		.text{
			font-family: sans-serif;
			font-size: 18px;
			color: #D35400;
			display: block;
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
	<form action="seleccion_de_etiquetado.php" method="POST">
		<h1 class="titulo">Selección de 
		decoración</h1>
	<label class="text">
		<p>Seleccióna el tipo de listón</p>
		<input type="radio" name="tipo" value="satinado">Satinado<br>
		<input type="radio" name="tipo" value="popotillo">Tramado popotillo<br>
		<input type="radio" name="tipo" value="organza">Organza<br>
		<input type="radio" name="tipo" value="tafeta">Tafeta<br>
		<input type="radio" name="tipo" value="hilometalico">Hilo metálico<br>	
		<p>Selecciona el color</p>
		<input type="radio" name="color" value="verde">Verde<br>
		<input type="radio" name="color" value="rojo">Rojo<br>
		<input type="radio" name="color" value="morado">Morado<br>
		<input type="radio" name="color" value="negro">Negro<br>
		<input class="button" hspace="60%" type="submit" name="enviar" value="Siguiente">
	</label>
	</form>
	</div>

</body>
</html>