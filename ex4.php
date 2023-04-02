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
<h1>Custo do carro</h1>

 <form method="get">

 Custo do carro na fábrica: <input type="text" name="valor1">
 <br><br>

 <input type="submit" value="Calcular"><br>

 </form>




<?php

if($_GET)//utilizado quando os dados do formulário tem a necessidade de ficar oculto ao usuário



 $f=$_GET['valor1'];

 $d= $f/100 * 28;

$i= $f/100 * 45;

 $total= $d+$i+$f;

 echo"<b> O resultado final é $total</b>"



 ?>
</center>
</body>

</html>