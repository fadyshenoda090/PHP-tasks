<?php
session_start();
unset($_SESSION['email']);
session_regenerate_id();
session_destroy();
header('Location: login.php');