<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="lj3";
    $conn=mysqli_connect($servername,$username,$password,$database);
    if(!$conn)
    {
        echo "error:" . mysqli_connect_error();
    }
?>