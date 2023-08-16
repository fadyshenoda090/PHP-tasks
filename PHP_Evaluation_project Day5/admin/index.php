<?php
session_start();
if (!empty($_SESSION['userName'])) : ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>admin index</title>
        <link rel="stylesheet" href="../bootstrap-5.3.0-dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    </head>

    <body>

        <?php
        require_once '../connection.php';
        require_once '../User.php';
        $select = $connection->prepare('SELECT * FROM users');
        $select->execute();
        $users = $select->fetchAll(PDO::FETCH_CLASS, 'User');
        ?>
        <div class="container">
            <div class="row">
                <table class="table table-success table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">City</th>
                            <th scope="col">Birthdate</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user) : ?>
                            <tr>
                                <td><?= $user->name ?></td>
                                <td><?= $user->email ?></td>
                                <td><?= $user->city ?></td>
                                <td><?= $user->birthdate ?></td>
                                <td>
                                    <a href="profile.php?id=<?= $user->id ?>"><span class="material-symbols-outlined">visibility</span></a>
                                    <a href="edit.php?id=<?= $user->id ?>"><span class="material-symbols-outlined">edit_note</span></a>
                                    <a href="delete.php?id=<?= $user->id ?>"><span class="material-symbols-outlined">delete</span></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <hr>
                <h2 class="display-4">Add New Student</h2>
                <form class="row g-3" action="insert.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                        <label for="formFile" class="form-label">Profile Photo</label>
                        <input class="form-control" type="file" id="formFile" name="photo">
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="col-md-6">
                        <label for="inputEmail4" class="form-label">Email</label>
                        <input type="text" class="form-control" id="inputEmail4" name="email">
                    </div>
                    <div class="col-md-6">
                        <label for="inputCity" class="form-label">City</label>
                        <input type="text" class="form-control" id="inputCity" name="city">
                    </div>
                    <div class="col-md-6">
                        <label for="birthdate" class="form-label">Birth Date</label>
                        <input type="date" class="form-control" id="birthdate" name="birthdate">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">add student</button>
                    </div>
                </form>
                <a class="btn btn-primary m-5" href="logout.php" role="button">logout</a>
            </div>
        </div>
        <script src="../bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    </body>

    </html>

<?php
else :
    header('Location: login.php');
endif; ?>