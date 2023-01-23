<?php
session_start();

$link = mysqli_connect("localhost", "root", "", "ecipos");

$username = mysqli_real_escape_string($link, $_POST['username']);
$password = mysqli_real_escape_string($link, $_POST['password']);

$query = "SELECT * FROM accounts WHERE username = '$username'";
$result = mysqli_query($link, $query);
$user = mysqli_fetch_assoc($result);

if($user) {
    if($password == $user['password']) {
        // Store the username in a SESSION variable
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        $_SESSION['updates'] = "default";
        $_SESSION['version'] = "1.0";        
        // Redirect to the Desktop
        header("Location: desktop.php");
    } else {
        header("Location: index.php?error=423");
    }
} else {
    header("Location: index.php?error=423");
}

mysqli_close($link);
?>
