<?php

$servername="localhost";
$username="root";
$password="";
$dbname="chat system";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)

{
die("failed to connect".mysql_connect_error());
}














?>