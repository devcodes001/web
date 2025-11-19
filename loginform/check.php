<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include('connect.php');

if (isset($_POST['submit'])) {

    $uname = mysqli_real_escape_string($conn, $_POST['uname']);
    $pword = mysqli_real_escape_string($conn, $_POST['pword']);

    // LOGIN QUERY (IMPORTANT: column names must match your table)
    $sql = "SELECT * FROM userlogin WHERE username='$uname' AND password='$pword'";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("SQL Error: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) == 1) {
        $_SESSION['login_user'] = $uname;
        header("Location: welcome.php");
        exit();
    } else {
        header("Location: login.php?msg=Invalid username or password");
        exit();
    }
}
?>



