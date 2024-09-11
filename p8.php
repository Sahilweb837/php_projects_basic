<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
  echo "<center> <ol> <mark>";
//   this  loop is using to  for each in php
$names = array("sahil","aman","rajnessh","abhay chahaun",);

 foreach($names as $x){
     echo "$x <hr>";

 }
//   this  statement is  using to   break the statment
 echo '<script> alert("here the output of this statement")</script>';
  for( $i=0; $i<=10; $i++)
   if($i===3){
     break;
   }
   echo " this  is the break statement   using  numbers  the total count is that show  is here:= $i" ;
?>
</body>
</html>