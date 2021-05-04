<?php      
    $host = "localhost";  
    $user = "id16300291_login";  
    $password = 'c!@c{p)cw[^\BR1Q';  
    $db_name = "id16300291_project";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    } ?>