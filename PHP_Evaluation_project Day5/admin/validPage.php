<?php
if (!empty($_POST['userName']) && !empty($_POST['password'])) {
    $userName = $_POST['userName'];
    $password = $_POST['password'];
    if ($userName == 'admin' && $password == '123456') {
        session_start();
        $_SESSION['authorized'] = true;
        $_SESSION['userName']='admin';
        header('location: index.php');
        // session_destroy();
    } else {
        echo 'invalid user';
    }
} else {
    echo 'you have to login first';
}
?>
