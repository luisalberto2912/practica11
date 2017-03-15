<html>
<head>
<title>Practica 11 php</title>
</head>
<body>
<?php
  //Luis Alberto Hernandez Perez
  //Usando variables en PHP
    echo "<h1>Variables</h1>";
	$nombre='Luis Alberto';//tipo cadena
	$apellidos='Hernandez Perez';
	$edad=21;//tipo entero
	$salario=3859.50;
	$fechaNacimiento='29/12/1995';
	$estatus=true;
	echo $nombre.'<br/>';
	echo $apellidos.'<br/>';
	echo 'Nombre completo:'.$nombre.' '.$apellidos.'<br/>';
	echo 'Tu edad es: '.$edad.'<br/>';
	echo 'Tu salario es:'.$salario.'<br/>';
?>
<h1>OPERADORES ARITMETICOS</h1>
<?php
$a=5;
$b=3;
$suma=$a+$b;
$resta=$a-$b;
$multiplicacion=$a*$b;
$divide=$a/$b;
echo 'La suma de '.$a.' + '.$b.'es:' .$suma.'<br/>';
echo 'La resta de '.$a.' - '.$b.'es:' .$resta.'<br/>';
echo 'La multiplicacion de '.$a.' * '.$b.'es:' .$multiplicacion.'<br/>';
echo 'La division de '.$a.' / '.$b.'es:' .$divide.'<br/>';
?>
</body>
</html>