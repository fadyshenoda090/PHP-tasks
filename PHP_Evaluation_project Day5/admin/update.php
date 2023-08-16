<?php
if($_SERVER['REQUEST_METHOD']=='POST'&&!empty($_POST['id'])){
        $id=$_POST['id'];
        $name=$_POST['name'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $birthdate=$_POST['birthdate'];
        if(!empty($_FILES['photo']['name'])){
            $photoName=$_FILES['photo']['name'];
            $tmp_name=$_FILES['photo']['tmp_name'];
            $allowedExt=['png','jpg','jpeg','webp','gif'];
            $explodeExt=explode('.',$photoName);
            $ext=end($explodeExt);
            if(in_array($ext, $allowedExt)){
                    move_uploaded_file($tmp_name,'../imgs/'.$photoName);
                    require_once '../connection.php';
                    $update=$connection->prepare('UPDATE users SET name=?,email=?,city=?,birthdate=?,image=? WHERE id=?');
                    $update->execute([$name,$email,$city,$birthdate,$photoName,$id]);
                    header('Location: index.php');
            }else{
                echo "You must upload Photo only";
                header('Refresh: 4;URL=index.php');
            }
        }else{
            require_once '../connection.php';
            $update=$connection->prepare('UPDATE users SET name=?,email=?,city=?,birthdate=? WHERE id=?');
            $update->execute([$name,$email,$city,$birthdate,$id]);
            header('Location: index.php');
        }
}
?>