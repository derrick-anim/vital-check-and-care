<?php
session_start();
$_SESSION['admin'] = false;
session_write_close();
header("Location: login.php");
exit;
