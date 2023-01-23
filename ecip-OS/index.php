<html>
    <head>
        <?php include 'css.php';

        session_start();

      ?>
</head>
<body class="unloggedin" >
    <center>
   
    <br><br><br><br><br><br><br>
    <div id="login">
        <img src="img/logo.png"><br>
        <p>Welcome to ecip-OS</p>
        <form action="login.php" method="POST">
        <input class="form-control"type="text" placeholder="Username" name="username"><br>
        <input class="form-control"type="password" placeholder="Password" name="password"><br>
        <input class="btn btn-primary"type="submit" value="Login"><br>
        
</form>
</div>
<hr>Welcome
<h4><font color="gray"><?php echo date("H:i")?></font></h4>
</center>
</body>
</html>