<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //  this is the regx in the php funtcion  of  regular expression
    $str = "bonadfide tech";
    $pattern = "/bonafide/i";
    echo preg_match($pattern, $str);


?>
</body>
</html>