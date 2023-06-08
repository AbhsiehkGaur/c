<?php
include("session.php");
unset($_SESSION['login_user']);
unset($_SESSION['name']);
header("Location: index.php");
?>
