<?php      
    $host = "localhost";  
    $user = "root";  
    $password = '';  
    $db_name = "sedatabase4";  
      
    $con = mysqli_connect($host, $user, $password, $db_name);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
    $key_id="rzp_test_VcteOFdguJjvp2";
    $secret="wPldkyoocjaX74Kt5xk1CaEb";
?>  