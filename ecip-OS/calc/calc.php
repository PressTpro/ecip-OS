<?php
include 'core.php';

$action = $_POST['actn'];
$numb1 = $_POST['numb1'];
$numb2 = $_POST['numb2'];
if($action == "+"){
    $result = $numb1 + $numb2;
}
if($action == "-"){
    $result = $numb1 - $numb2;
}
if($action == "x"){
    $result = $numb1 * $numb2;
}
if($action == "/"){
    if($numb2 != 0) {
        $result = $numb1 / $numb2;
    } else {
        echo 'Error: Cannot divide by zero';
        exit();
    }
}
echo '<center>Result: <br><h1>'. $result. '</h1></center>';
echo '<br><br><center><a href="index.php">Another One</a></center>';
?>
</body>
