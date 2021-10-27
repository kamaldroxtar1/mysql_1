<?php

    define("HOST","localhost");
    define("UNAME","root");
    define("PASSWORD","");
    define("DBNAME","myproject1");
    $conn=mysqli_connect(HOST,UNAME,PASSWORD,DBNAME) or die("Connection error");
?>