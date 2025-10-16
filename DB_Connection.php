<?php
$host ="localhost";
$usrname="root";
$password="";
$db ="202502D";
$connection =mysqli_connect($host,$username,$password,$db);
if($connection){
    echo"DB connect successfully";
}
else{
    echo"Error Not connected";
}

?>