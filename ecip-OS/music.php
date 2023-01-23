<?php
include 'mustlogin.php';
include 'css.php';
include 'taskbar.php';
$file  = $_POST['file'];
?>
<audio controls>
    <source src="<?php echo '/MyFolder/'. $file ?>.mp3" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>