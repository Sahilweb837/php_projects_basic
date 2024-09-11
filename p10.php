<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $x = 10;
//    THIS PRACTICAL SHOW THE HOW TO MAKE THE FUNCTIONS IN  PHP
     function myfunc() {
        $y = 90;
         echo "  inside the  function the variable doesnt work $y <br>";
     }  
       echo " this   variable is  outside the fucntion  here the output : $x <br> ";
      myfunc();
    ?>
</body>
</html>