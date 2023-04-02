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
<h1>Metros para CM</h1>
    <form method="POST">
        Metros:<input type="number" name="m">  <br>
        

        <input type="submit" value="Nota Final"> <br>

    </form>
<?php

    if($_POST)
    {

       
        $m=$_POST['m'];
    
        $total=$m*100;

        echo "Em cm é : $total";
    
    }
?>
</center>
</body>
</html>