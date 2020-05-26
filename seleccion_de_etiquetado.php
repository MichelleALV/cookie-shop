<?php
	$con=mysqli_connect('localhost', 'root', '', 'cookieshop') or die('Error en la conexion del servidor');
	$sql= "INSERT INTO `seleccion_de_decoracion` (`id`, `tipo`, `color`) VALUES 
		(NULL,  '".$_POST["tipo"]."',  
	      	    '".$_POST["color"]."')";
	$resultado=mysqli_query($con, $sql) or die('Error en el querry database');
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<center>
<img height="750" width="1150" src="fondo5.jpg" /><head>
</center>
<head>
	<title>Selección de etiquetado</title>
	<style>
		.box{
			position: absolute;
    		left: 50%;
    		top: 50%;
    		transform: translate(-50%,-50%);
    		background-color: #E59866  ;
    		border-radius: 10px;
    		padding: 30px 20px;
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
		<form action="registro.php" method="POST">
		<h1 class="titulo">Selección de etiquetado</h1>
	<label class="text">
		<p>Selecciona el tamaño</p>
		<input type="radio" name="tamaño" value="chico">Chico<br>
		<input type="radio" name="tamaño" value="mediano">Mediano<br>
		<p>Selecciona el formato</p>
		<input type="radio" name="formato" value="tarjeta">Tarjeta<br>
		<input type="radio" name="formato" value="sticker">Sticker<br>
		<p>Selecciona la forma</p>
		<input type="radio" name="forma" value="circulo">Circulo<br>
		<input type="radio" name="forma" value="cuadrado">		Cuadrado<br>
		<input class="button" hspace="60%" type="submit" name="enviar" value="Siguiente">
	</label>
	</form>
	</div>
</body>
</html>