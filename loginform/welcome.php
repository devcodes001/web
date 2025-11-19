<?php
session_start();

if (!isset($_SESSION['login_user'])) {
    header("Location: login.php?msg=Please login first");
    exit();
}
?>

<!DOCTYPE html>
<html>
<body>
<h1 align="center">Welcome</h1>
<h2 align="center">
    <?php echo htmlspecialchars($_SESSION['login_user']); ?>
</h2>
</body>
</html>

