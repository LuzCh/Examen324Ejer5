<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Cuentas</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 0;
		font-family: Courier, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
		text-decoration: none;
	}

	a:hover {
		color: #97310e;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0;
		min-height: 96px;

	}

	p {
		margin: 0 0 10px;
		padding:0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}


	.contain {
    width: 90%;
    margin-left: 3%;
}

header {
    background-color: #d5e2cd;
    color: #000000;
    padding: 10px 0;
}

header h1 {
    margin: 0;
    font-size: 24px;
}

nav ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #000000;
    text-decoration: none;
}

footer {
    background-color: #d5e2cd;
    color: black;
    text-align: center;
    padding: 10px 0;
    position: fixed; 
    bottom: 0; 
    width: 100%; 
}
a
{
    color: #555b51;
}
table
{
    width: 70%;
    border: 3px solid #aab3a4;
}

th, td {
    border: 1px solid #d5e2cd;
    padding: 8px; 
    text-align: left; 
}
	</style>
</head>
<body>

<header>
    <div class="contain">
        <h1>Banco ABC</h1>
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Ingresar</a></li>
            </ul>
        </nav>
    </div>
</header>

<div id="container">
	<h1>Bienvenido a la tabla de cuentas!</h1>

	<div id="body">
	<table>
		<tr>	
			<td>nro_cuenta</td>
			<td>monto</td>
			<td>tipo</td>
			<td>estado</td>
			<td>id_usuario</td>
			<td>opcion</td>
		</tr>
	<?php
		//echo "<br>";
		//print_r($filas);
		//echo "<br>";
		foreach($filas as $fila)
		{
			echo "<tr>";	
			echo "<td>$fila->nro_cuenta</td>";
			echo "<td>$fila->monto_cuenta</td>";
			echo "<td>$fila->tipo_cuenta</td>";
			echo "<td>$fila->estado_cuenta</td>";
			echo "<td>$fila->id_usuario</td>";
			echo "<td><a href='Lectura/indexdos?nro_cuenta=".$fila->nro_cuenta."'>Eliminar</a></td>";
			echo "</tr>";
		}
	?>
	</div>

</div>
<footer>
    <div class="contain">
        <p>&copy; 2024 Banco ABC. Todos los derechos reservados.</p>
    </div>
</footer>


</body>
</html>
