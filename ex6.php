<!DOCTYPE html>

<html lang="en">

<head>

<meta charset="UTF-8">

 <meta http-equiv="X-UA-Compatible" content="IE=edge">

 <meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Document</title>

</head>

<body>
<center>
<h1>Tamanho de arquivo </h1>




 <form method="get">

Tamanho do arquivo em MB: <input type="text" name="valor1"><br>

Velocidade do link em Mbps: <input type="text" name="valor2"><br>

 <input type="submit" value="Calcular">

 </form>




 <?php

 if($_GET){

 $b=$_GET['valor1'];

 $a=$_GET['valor2'];

 $e=$a/$b/8;

 $t=$e/60;

 echo"<b> O tempo aproximado de dowload do arquivo usando este link é $t minutos</b>";





 }

 ?>
</center>
</body>

</html>