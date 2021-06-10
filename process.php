<?php
include("config.php");
extract($_POST);
$sql = "INSERT INTO `courseform`(`firstname`, `lastname`, `phone`, `email`,`message`) VALUES ('".$firstname."','".$lastname."',".$phone.",'".$email."','".$message."')";
$result = $mysqli->query($sql);
if(!$result){
    die("Couldn't enter data: ".$mysqli->error);
}
header("location:welcome.php");
$mysqli->close();
?>