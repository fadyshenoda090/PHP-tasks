<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bootstrap-5.3.0-dist/css/bootstrap.min.css">
    <style>
            body {
            background-image: url('./image/Universite-Paris-Rive-Gauche.JPG');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body>

    <!-- <img style="size: cover;" src="./image/Universite-Paris-Rive-Gauche.JPG" alt="university image"> <br> -->

    <div class="text-center" style="height: 100vh; display: flex; align-items: center; justify-content: center;">
        <a class="btn btn-primary" href="./admin/login.php" role="button" onclick="openAdminPage()" class="button">admin</a>
        <a class="btn btn-primary m-5" href="view.php" role="button" onclick="openUserPage()" class="button">user</a>
    </div>
    <script>
        function openAdminPage() {
            open("./admin/login.php", "_self");
        }

        function openUserPage() {
            open("view.php", "_self");
        }
    </script>
</body>