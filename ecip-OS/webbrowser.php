<?php
include 'css.php';
include 'mustlogin.php';
include 'taskbar.php';
?>
<body class="loggedin">
    <center>
        <form action="" method="post">
            <input type="text" name="sitetovisit" class="form-control">
            <input type="submit" name="Go" value="Enter" class="btn btn-dark">
</form>
<?php 
if($_POST['Go'] == "Enter" && $_POST['sitetovisit']){
    echo '<iframe src="'. $_POST['sitetovisit'] .'" width="1366" height="646"></iframe>';
}
?>
</center>
</body>