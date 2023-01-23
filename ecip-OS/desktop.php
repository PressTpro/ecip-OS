<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!$_SESSION['loggedin']){
    header("Location: index.php?error=422"); 
}
?>
<link rel="stylesheet" href="img/common.css"><link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<body class="loggedin">
    <?php include 'taskbar.php';?>
<a href="myfolder.php"><img src="img/pc.png"></a>
<a href="textedit.php" ><img src="img/emptyfile.png"></a>
<a href="calc/" ><img src="img/calc.png"></a>
<a href="signout.php" ><img src="img/turnoff.png"></a><br>
<a href="webbrowser.php" ><img src="img/webbrowser.png"></a>
<a href="settings.php" ><img src="img/settings.png"></a>
<a href="musicplayer.php" ><img src="img/mp3.png"></a>
</body>