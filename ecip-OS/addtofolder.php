<?php
    if(isset($_FILES["fileToUpload"])) {
        $target_dir = "MyFolder/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $file_type = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            header("Location: myfolder.php");
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
?>
