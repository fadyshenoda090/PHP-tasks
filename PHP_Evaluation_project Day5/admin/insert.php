<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['name']) && !empty($_FILES['photo'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $city = $_POST['city'];
        $birthdate = $_POST['birthdate'];
        $photoName = $_FILES['photo']['name'];
        $tmp_name = $_FILES['photo']['tmp_name'];
        $photoSize = $_FILES['photo']['size'];
        $allowedExt = ['png', 'jpg', 'jpeg', 'webp', 'gif'];
        $explodeExt = explode('.', $photoName);
        $ext = end($explodeExt);
        if (in_array($ext, $allowedExt)) {
                move_uploaded_file($tmp_name, '../imgs/' . $photoName);
                require_once '../connection.php';
                $insert = $connection->prepare('INSERT INTO users (name, email, city, birthdate, image) VALUES ( ?,?,?, ?, ?)');
                $insert->execute([$name, $email, $city, $birthdate, $photoName]);
                header('Location: index.php');
                exit;
            
        } else {
            echo "You must upload a Photo only";
            header('Refresh: 4; URL=index.php');
            exit;
        }
    } else {
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}
?>
