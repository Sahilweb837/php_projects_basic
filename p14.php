<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  this  is the multi dimensional array in php to store the  data of our employee
 
$cars = array (
  array("sahil",22,18000),
  array("aman",15,13000),
  array("surjeet",5,2000),
  array("kumar ",17,15000)
);
 
echo  "<center> <hr> <b>";
echo $cars[0][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[0][1].",  he get the salary per month in hand of  company: ".$cars[0][2].".<br><br> <hr>";
echo $cars[1][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[1][1].", he get the salary per month in hand of  company: ".$cars[1][2].".<br><br> <hr>";
echo $cars[2][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[2][1].", he get the salary per month in hand of  company: ".$cars[2][2].".<br><br> <hr>";
echo $cars[3][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[3][1].", he get the salary per month in hand of  company: ".$cars[3][2].".<br><br> <hr>";
echo $cars[0][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[0][1].", he get the salary per month in hand of  company: ".$cars[0][2].".<br><br> <hr>";
echo $cars[1][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[1][1].", he get the salary per month in hand of  company: ".$cars[1][2].".<br><br> <hr>";
echo $cars[2][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[2][1].", he get the salary per month in hand of  company: ".$cars[2][2].".<br><br> <hr>";
echo $cars[3][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[3][1].", he get the salary per month in hand of  company: ".$cars[3][2].".<br><br> <hr>";
echo $cars[0][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[0][1].", he get the salary per month  he get the salary per monthin hand of  company: ".$cars[0][1].".<br><br> <hr>";
echo $cars[1][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[1][1].", he get the salary per month in hand of  company: ".$cars[1][2].".<br><br> <hr>";
echo $cars[2][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[2][1].", he get the salary per month in hand of  company: ".$cars[2][2].".<br><br> <hr>";
echo $cars[3][0].":  is the name   of our worker  and her job title  was  the   web dev and he    her batch number   is : ".$cars[2][1].", he get the salary per month in hand of  company: ".$cars[3][2].".<br><br> <hr>";
 
?>
    
</body>
</html>