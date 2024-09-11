<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  this is the  do while  loop in using in the php
   $text = "";
     $i = 0;
do {
  $text += $i + "<hr>";
  $i++;
}
while ($i < 5);
 echo($text);

    ?>

</body>
</html>