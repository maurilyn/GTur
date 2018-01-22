<?php  

    header("Content-type: text/html; charset=iso-8859-1");

    // 127.0.0.1  
    // mysql785.umbler.com
    $host = "mysql785.umbler.com";
    $user = "maurilyn";             //Your Cloud 9 username
    $pass = "gtur5182";                     //Remember, there is NO password by default!
    $db = "gtur";                   //Your database name you want to connect to
    $port = 3306;                   //The port #. It is always 3306
    
    $con = mysqli_connect($host, $user, $pass, $db, $port)or die(mysql_error());

?>