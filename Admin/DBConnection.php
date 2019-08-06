<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $server = "localhost";
            $account = "root";
            $password = "";
            $database = "project";
            $cnn = mysqli_connect($server, $account, $password, $database);
        ?>
    </body>
</html>
