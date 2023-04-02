<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title></title>

</head>
<body>

<center>
 <h1>Projeto Calculadora</h1>

<form method="post">

    
Valor 1: <input type="text" name="v1">
<br>

Valor 2: <input type="number" name="v2">
<br>

 <br>

<select name="operacao">

 <option>Subtração</option>

 <option>Multiplicação</option>

<option>Divisão</option>

 <option>Soma</option>

<option>Potenciação</option>

 </select>




<br> <input type="submit" value="Calcular">

 </form>

 <?php

if ($_POST) {

 $v1 = $_POST['v1'];

 $v2 = $_POST['v2'];

$op = $_POST['operacao'];




 if ($op == 'Subtração') {

$total = $v1 - $v2;

 echo $total;

 } else if ($op == 'Multiplicação') {

 $total = $v1 * $v2;

 echo $total;

} else if ($op == 'Divisão') {

$total = $v1 / $v2;

 echo $total;

} else if ($op == 'Soma') {

 $total = $v1 + $v2;

 echo $total;

 }else if ($op == 'Potenciação') {

 $total = pow ($v1,$v2) ;

echo $total;

 }

 }

?>



</center>
 </body>

</html>