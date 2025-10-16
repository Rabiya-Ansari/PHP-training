<?php
if(isset($_GET['GETbtn'])){
    $name = $_GET['name'];
    $message = $_GET['message'];
    echo"Name is".$message."and message".$message;
}
else{
    echo"Not accuring";
}
?>