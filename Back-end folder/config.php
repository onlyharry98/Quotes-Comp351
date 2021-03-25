<?php
//connecting to mySQL database

$servername='localhost';
$username='iamharry_iamharry';
$password='yodog007';
$dbname = "iamharry_quoteDB";

$conn = mysqli_connect($servername,$username,$password,$dbname);
$query=mysqli_query($conn, "SELECT * FROM Quote");


if($conn === false) {
    die("Error: Could not connect." . mysqli_connect_error());
}


?>