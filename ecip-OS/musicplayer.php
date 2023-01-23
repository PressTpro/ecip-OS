<?php
include 'mustlogin.php';
include 'css.php';
include 'taskbar.php';
?>
<body class="loggedin">
    <form action="music.php" method="POST">
        <p>ecip-OS Music Player only supports .mp3 files, Also the Music File must be in MyFolder</p>
        <input type="text" name="file"  placeholder="Filename (Without .mp3)">
        <input type="submit" value="Play">
</form>
</body>