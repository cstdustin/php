<?php
$dbConnection = mysqli_connect("localhost","root","0000","shop");

if (mysqli_connect_error())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>