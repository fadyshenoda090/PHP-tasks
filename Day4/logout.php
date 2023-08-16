<?php 
session_start();
unset($_SESSION['userName']);
session_destroy();
session_regenerate_id();
header("location: index.php");
?>