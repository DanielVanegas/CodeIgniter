<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Formulario</title>

	<style type="text/css">

	::selection { background-color: #f07746; color: #fff; }
	::-moz-selection { background-color: #f07746; color: #fff; }

	.titulo{
    text-align: center;
	padding: 30px 10px;
	border: PowderBlue 5px solid;
	border-top-left-radius: 40px;
	border-bottom-right-radius: 20px;
	color:blueviolet;
	margin: 50px 50px;
	font-size: 500%;
	}

	.forma{
    text-align: center;
	padding: 20px 10px;
	border: PowderBlue 5px solid;
	border-top-left-radius: 20px;
	border-bottom-right-radius: 20px;
	color:blueviolet;
	margin: 50px 50px;
	font-size: 100%;
	}
	
	</style>
</head>
<body>
	<p class = "titulo">
            Login Universidad Distrital
        </p>
     <form action="procesador.php">
            <p class =" forma">
            <input type="text" name="usuario"><br>
            <br>
            <input type="password" name="clave"><br>
            <br>
            <input type="submit" name="ingresar"><br> 
            <br>
            </p>
        </form>
	
	<a href="welcome_message.php">
		
		<div align="center"><img src="2.jpg"></div>
		
		
		
	</a>
	
		
</body>
</html>
