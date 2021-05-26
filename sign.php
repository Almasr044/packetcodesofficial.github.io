<?php
session_start();
$link = mysqli_connect('localhost','root','','testtaskdb');
$selectQuery = "SELECT * FROM user WHERE username = '".$_POST['username']."' and password ='".$_POST['password']."'";
$select = mysqli_query($link, $selectQuery);
if(mysqli_num_rows($select) >0 ){
  header("Location: profile.php");
$_SESSION['username']=$_POST['username'];
}
else {
  echo "<center>404 PAGE NOT FOUND </center>";
}
 ?>
