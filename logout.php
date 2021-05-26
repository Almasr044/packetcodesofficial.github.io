<?php
session_start();
session_unset();
session_destroy();
if($_SESSION['username']){
  echo "404";
}
else {
  header("Location: index.html");
}
 ?>
