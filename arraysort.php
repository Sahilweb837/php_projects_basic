<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //  this  methods in used  to sort the array in php
    $names = array("aman", "abhi", "surjeet", "ajay");
    sort($names);


    //   this is  the method and her name was the  krsort method  

    $age = array("aman" => "23", "abhi" => "32", "sumna" => "23");
    ksort($age);
    

    //  this is the method  and her name  was the arsort in php
    $age1 = array("aman" => "23", "abhi" => "32", "sumna" => "23");
    arsort($age1);
    
    //  this is  the method in  and her name  was  the krsort

    $age2= array("aman" => "23", "abhi" => "32", "sumna" => "23");
    krsort($age2);
    

    ?>
</body>

</html>