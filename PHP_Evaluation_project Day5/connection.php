<?php
try{
    $connection = new PDO('mysql:dbname=universitydb;host=localhost','root','');
    //echo "connected";
}catch (PDOException $exception){
    echo $exception->getMessage();
}