<?php
	$con=mysqli_connect('localhost', 'root', '', 'cookieshop') or die('Error en la conexion del servidor');
	$sql= "INSERT INTO `venta` (`id`, `tipo`, `piezas`) VALUES 
		(NULL,  '".$_POST["tipo"]."',  
	      	    '".$_POST["piezas"]."')";
	$resultado=mysqli_query($con, $sql) or die('Error en el querry database');
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<center>
<img height="750" width="1150" src="fondo3.jpg" /><head>
</center>
	<title>Selección de galleta</title>
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
			<form action="decoracion.php" method="POST">
			<h1 class="titulo">Selección de galleta</h1>
		<label class="text">
			<p>Selecciona la forma</p>
			<input type="radio" name="forma" value="circulo">Circulo<br>
			<input type="radio" name="forma" value="cuadrado">Cuadrado<br>
			<input type="radio" name="forma" value="corazón">Corazon<br>
			<input type="radio" name="forma" value="estrella">Estrella<br>
			<p>Selecciona los colores</p>
			<input type="radio" name="color" value="amarillo">Amarillo<br>
			<input type="radio" name="color" value="verde">Verde<br>
			<input type="radio" name="color" value="azul">Azul<br>
			<p>Selecciona la temática</p>
			<input type="radio" name="tematica" value="bautizo">Bautizo<br>
			<input type="radio" name="tematica" value="XV años">XV años<br>
			<input type="radio" name="tematica" value="Boda">Bosa<br>
			<input type="radio" name="tematica" value="Graduacion">Graduacion<br>
			<input hspace="60%" class="button" type="submit" name="enviar" value="Siguiente">
		</label>
	</form>
	</div>
	
</body>
</html>