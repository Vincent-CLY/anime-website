<?php 

    $severName = "sql300.epizy.com";
    $dBUsername = "epiz_32235325";
    $dBPassword = "8OzcKuOaji";
    $dBName = "epiz_32235325_login";
    

    $conn =  mysqli_connect( $severName, $dBUsername , $dBPassword,  $dBName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    
?>
   
