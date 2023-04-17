<?php
$hostname="localhost";
$username="root";
$password="";
$database="authantication";
$connection = mysqli_connect('localhost','root','','authantication');
if($connection)
{
    // echo"connection successfull";
}
else{
    echo "ERROR";
} 
?>