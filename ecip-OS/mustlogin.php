<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!$_SESSION['loggedin']){
    header("Location: index.php?error=422"); 
}
$link = mysqli_connect("localhost","root","","ecipos");
?>