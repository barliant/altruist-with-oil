<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>WishList</title>
    </head>
    <body>
        This is the WishList page, showing the wish list of
        <?php echo htmlentities($_GET["user"]);
        ?>
        <br/>
        <?php
        $con = mysqli_connect("localhost", "phpuser", "phpuserkosong");
        if (!$con) {
            exit('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());    
        }
        //set the default client character set 
        mysqli_set_charset($con, 'utf-8');
        ?>
    </body>
</html>
