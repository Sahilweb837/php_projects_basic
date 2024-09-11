 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
 </head>

 <body>
     <?php

        function prompt($msg)
        {
            echo ("<script> var answer = prompt('" . $msg . "'); </script>");

            $answer = "<script> document.write(answer); </script>";
            return ($answer);                                                       
        }

        //program  to print the  name of this  user in  document 
        $msg = "Please type your name.";
        $name = prompt($msg);

        $out_msg = " <center>Hello there  <br> <b> <hr> " . $name . "!";
        echo ($out_msg);
        ?>
 </body>

 </html>