<?php 
    $servername="localhost";
    $username="root";
    $password="";
    $dbname="diary";


    $connection=mysqli_connect($servername,$username,$password,$dbname);

    if(!$connection){
    	die("connection failed: " . mysqli_connect_error());
    }

 ?>