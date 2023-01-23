<?php
include 'css.php';
?>
<style>
background-color: black; color: white;
p {
    display: inline-block;
    margin-right: 10px;
}
a {
    display: inline-block;
}
.right{
  display: flex;
  align-items: right;
}</style>
<!DOCTYPE html>
<html>
  <head>
    <style>
      /* CSS styles here */
      body{
        background-color: black;
      }
      p {
          display: inline-block;
          margin-right: 10px;
      }
      a {
          display: inline-block;
      }
      .right{
        display: flex;
        align-items: flex-end;
      }
    </style>
  </head>
  <body>
    <div class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><img src="img/icon.png" width="32" height="32"></a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="desktop.php">Desktop</a>

        <div class="dropdown-divider"></div>

        <a class="dropdown-item" href="signout.php">Change User</a>
      </div>
      <div class="right">
        <p style="color: white;"> <i class="fa-regular fa-clock"></i><?php echo date("H : i");?></p>
        <a href="signout.php" style="color: white;"> <i class="fa-solid fa-power-off"></i></a>
      </div>
    </div>
  </body>
</html>
