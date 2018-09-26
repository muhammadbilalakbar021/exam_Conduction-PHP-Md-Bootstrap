<?php
session_start();
//unset the session to make a user logged out
unset($_SESSION['login_user']);
session_destroy();
header("location:index.php");
?>
