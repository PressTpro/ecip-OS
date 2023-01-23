<?php
include 'mustlogin.php';
include 'css.php';
include 'taskbar.php';


?>
<body class="loggedin">
    <center>
        <h3>Settings</h3><br>
        <p>Add a User</p>
        <p>This user will have less permissions than the Main User (Administrator)</p>
        <p>You will share the My Folder</p>
       <form action="useradd.php" method="post">
        <input type="text" class="form-control" name="username">
        <input type="password" class="form-control" name="password">
        <input type="submit" class="form-control" value="Update">
</form>
<hr>
<?php 
if($_SESSION['username'] == "Administrator"){


$link = mysqli_connect("localhost", "root", "", "ecipos");

$query = "SELECT * FROM accounts";
$result = mysqli_query($link, $query);
$browser = get_browser();
echo "You are using: " . $browser->browser . " version " . $browser->version;
echo "<table>";
echo "<tr><th>Username</th><th>Password</th></tr>";

while($row = mysqli_fetch_assoc($result)){
  echo "<tr>";
  echo "<td>" . $row['username'] . "</td>";
  echo "<td>" . $row['password'] . "</td>";
  echo "</tr>";
}
}
echo "</table>";

mysqli_close($link);
?>
<hr>


    </center>
</body>