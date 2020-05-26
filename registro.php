<?php
	$con=mysqli_connect('localhost', 'root', '', 'cookieshop') or die('Error en la conexion del servidor');
	$sql= "INSERT INTO `seleccion_de_etiquetado` (`id`, `tamaño`, `formato`, `forma`) VALUES 
		(NULL,  '".$_POST["tamaño"]."', 
	       		'".$_POST["formato"]."', 
	      	    '".$_POST["forma"]."')";
	$resultado=mysqli_query($con, $sql) or die('Error en el querry database');
	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<center>
<img height="750" width="1150" src="fondo6.jpg" /><head>
</center>
<head>
	<title>Registro</title>
	<style >
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
			font-size: 35px;
			color: #D35400;
		}
	</style>
</head>
<body bgcolor="#E59866">
	<div class="box">
		<h1 class="titulo">Su registro ha sido exitoso</h1>
	</div>
</body>
</html>