<?php
if(session_status() == PHP_SESSION_NONE) {
    session_start();
}
if(!$_SESSION['loggedin']){
    header("Location: index.php?error=422"); 
}
?>
<link rel="stylesheet" href="img/common.css">
<body class="loggedin">
<?php include 'taskbar.php';?><br>
    <div class="card">
    <script async src="https://cse.google.com/cse.js?cx=21e1785b06e924aa1">
</script>
<div class="gcse-search"></div>
</div>
</body>