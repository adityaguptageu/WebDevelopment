<?php
$hostname="localhost";
$username="root";
$password="";
$Databasename="Web";

$comm= mysqli_connect($hostname,$username,$password,$Databasename);
if($comm)
{
    echo"Connection successful...";
}
else{
    echo"Connection Failed..." + mysqli_connect_error();
}
?>