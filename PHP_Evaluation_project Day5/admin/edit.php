<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['id'])) {
    require_once '../connection.php';
    require_once '../User.php';
    $select = $connection->prepare('SELECT * FROM users WHERE id=?');
    $select->execute([$_GET['id']]);
    $select->setFetchMode(PDO::FETCH_CLASS, 'User');
    $user = $select->fetch();
?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="../bootstrap-5.3.0-dist/css/bootstrap.min.css">
    </head>

    <body>
        <div class="container">
            <div class="row">
                <h2 class="display-4">Edit User</h2>
                <form class="row g-3" action="update.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <input type="hidden" value="<?= $user->id ?>" name="id">
                        <label for="formFile" class="form-label">Profile Photo</label>
                        <input class="form-control" type="file" id="formFile" name="photo">
                    </div>
                    <div class="col-md-6">
                        <img src="../imgs/<?= $user->image ?>" width="200px" height="200px">
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?= $user->name ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name="email" value="<?= $user->email ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city" value="<?= $user->city ?>">
                    </div>
                    <div class="col-md-6">
                        <label for="birthdate" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?= $user->birthdate ?>">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="../bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    </body>

    </html>
<?php } ?>