<?php

    $username = "root";
    $password = "";
    $server = "127.0.0.1:8111";
    $db ="crudopr";

    $con = mysqli_connect($server, $username, $password, $db);
    
    if($con){
        // echo "Connection Successful";
        ?>
        <!-- <script>alert("Database Connection Successful")</script> -->
        <?php
    }else{
        echo "Connection Failed";
    }
?>