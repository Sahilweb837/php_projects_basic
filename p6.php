<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
#THIS IS THE PHP STRING METHODS WITH DIFFRENT ACTIONS 
$name = " hello sahil";
//  this function  is used to show the output in uppercase
   echo"<center>";
   echo strtoupper($name);
   echo "<hr>";
   //  this function  is used to show the output in  lowercase

   $name1 = "HELLO SAHIL";
   echo strtolower($name1);
   echo "<hr>";

//  this method   is used to to concatenated the string  using this  .
 $x = "sahil";
 $y = "sandhu";
 $z = $x ." + ". $y;
 echo($z);

    ?>
</body>
</html>