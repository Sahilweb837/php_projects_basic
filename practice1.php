<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   echo "<center> <b>
   <hr>";
    //  this is the  case switch practice
  $name =  1;
  switch($name)
  {
     case 1:
        echo "this is the first user her name was sahil  roll number is $name";
        break;
     case 2:
        echo " this is the second user of this series her   name was aman";
         break;
          default:
          echo"enter the correct  value for this ";        
  }
//    this  is the  loop practice
echo "<br>";
 for($i=0; $i<10;$i++){ 
    echo   "<br> $i";

 }
//   this  is the while loop example
echo "<hr>";
$while = 0;
  while($while<10){
      echo " <br>$while";
      $while++;
  }
    ?>
</body>
</html>