<?php
$server="localhost";
$username="root";
$password="";
$database="soul";
$conn=mysqli_connect($server,$username,$password,$database);
if (!$conn) {
    echo "Error connecting to server";
    # code...
}

?>