<?php
if($_SERVER['REQUEST_METHOD']=='GET'&&!empty($_GET['id'])){
    require_once '../connection.php';
    $delete=$connection->prepare('DELETE FROM users WHERE id = ?');
    $delete->execute([$_GET['id']]);
    header('Location: index.php');
}