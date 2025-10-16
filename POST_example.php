<?php
if(isset($_POST['POSTbtn'])){
    $name = $_POST['name'];
    $message = $_POST['message'];
    echo"Name is".$message."and message".$message;
}
else{
    echo"Not accuring";
}
?>