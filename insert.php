<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "testtaskdb");

// Check connection
if($link === false){
    die("ERROR: нет соедение с баззой данных(XAMMP) " . mysqli_connect_error());
}

// Escape user inputs for security
$numberph = mysqli_real_escape_string($link, $_REQUEST['numberph']);

// Attempt insert query execution
$sql = "INSERT INTO contactus (number) VALUES ('$numberph')";
if(mysqli_query($link, $sql)){
    echo "Номер отправлен в базу данных";
} else{
    echo "ERROR:данных нет в базе $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);
?>
