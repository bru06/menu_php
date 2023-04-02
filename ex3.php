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
<h1>Nota Final</h1>
    <form method="POST">
        Nota1:<input type="number" name="nota1">  
        <br>
        Nota2:<input type="number" name="nota2">  
        <br>
        Nota3:<input type="number" name="nota3">  
        <br>

        <input type="submit" value="Nota Final"> 
        <br>

    </form>
<?php

    if($_POST)
    {

       
        $n1=$_POST['nota1'];
        $n2=$_POST['nota2'];
        $n3=$_POST['nota3'];
        
        $total=($n1*2)+($n2*3)+($n3*5)/10;

        echo "A nota final é : $total";
    
    }
?>
</center>
</body>
</html>