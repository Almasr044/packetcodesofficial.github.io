<?php
$link = mysqli_connect('localhost','root','','testtaskdb');
$insertQuery = "INSERT INTO user(name,username,password) VALUES ('".$_POST['name']."','".$_POST['username']."','".$_POST['password']."')";
$insert=mysqli_query($link, $insertQuery);
if($insert){
  header("Location:login.php");
}
 ?>
