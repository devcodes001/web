<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<center>
<h2>Login Page</h2>

<form action="check.php" method="post">
    Username: <input type="text" name="uname" required><br><br>
    Password: <input type="password" name="pword" required><br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_GET['msg'])) {
    echo "<br><br><b>" . htmlspecialchars($_GET['msg']) . "</b>";
}
?>
</center>
</body>
</html>

