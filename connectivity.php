<?php
$host="localhost";
$user="root";
$pass="";
$db="schoolz";
$myconn=mysqli_connect($host,$user,$pass,$db);
if($myconn)
{
    echo" ";
}
else
{
    echo"do not connected";
}
?>