<!DOCTYPE html>
<html>
<img  hspace="230px" height="750" width="650" src="fondo.jpg" />
<head>
	<title>Registro</title>
	<style >
		.box{
			position: absolute;
    		left: 62%;
    		top: 50%;
    		transform: translate(-50%,-50%);
    		background-color: #E59866  ;
    		border-radius: 10px;
    		padding: 30px 80px;
    		background-color: rgba(0, 0, 0, 0.89);
		}
		.titulo{
			font-family: monospace; 
			font-size: 45px;
			color: #D35400;
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
		.text{
			font-family: sans-serif;
			font-size: 18px;
			color: #D35400;
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
		.politica{
			font-family: sans-serif;
			display: block;
			font-size: 15px;
			color: #BA4A00 ;
		}
	</style>
</head>
<body bgcolor="#E59866">
	<div class="box">
	<h1 class="titulo">REGISTRO</h1>
	<form action="venta.php" method="POST">
	<label class="text">
		Nombre<input class="caja" type="text" name="nombre">
		Apellido<input class="caja" type="text" name="apellido">
		Telefono<input class="caja" type="int" name="telefono">
		e-mail<input class="caja" type="text" name="correo">
	</label>
	<label class="politica">
		<br>
		<input type="radio" name="politica">Acepto términos y condiciones
		<br>
		<input type="radio" name="notificaciones">Recibir notificaciones
	</label>
		<input hspace="60%" class="button" type="submit" name="enviar" value="Siguiente">
	</form>
	</div>
</body>
</html>
