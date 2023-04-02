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
    <h1>A e B</h1>
    <br>

    <form method="POST">

        
        A:<input type="text" name="a"> 
         <br>
        B:<input type="text" name="b"> 
         <br>

        <input type="submit" value="Troca valor">
         <br>

    </form>

    <?php

    if($_POST)
    {

       
        $b=$_POST['b'];
        $a=$_POST['a'];
       
        
       $a=$a+$b;
       $b=$a-$b;
       $a=$a-$b;
       $b=$_POST['a'];

        echo ' '.$a;
        echo' ' .$b;
    
    }
?>

</center>
</body>
</html>