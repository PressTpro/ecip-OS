<?php 
include 'mustlogin.php';
include 'css.php';
include 'taskbar.php';

?>
<body class="loggedin">

<?php

$dir = "MyFolder/";
$files = scandir($dir);
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        $file_type = strtolower(pathinfo($file,PATHINFO_EXTENSION));
        echo '<a href="MyFolder/'.$file.'" style="text-decoration: none;">';
     echo '<img src="img/emptyfile.png"><br>';
        echo '<p>'.$file.'<br>';
echo '</a>';
}

    }


?>
<hr>

<hr>
<form action="addtofolder.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload">
    <input type="submit" value="Upload File">
</form>
</body>