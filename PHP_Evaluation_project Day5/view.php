    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link rel="stylesheet" href="./bootstrap-5.3.0-dist/css/bootstrap.min.css">        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    </head>
    <body>

    <?php
    require_once 'connection.php';
    require_once 'User.php';
    $select=$connection->prepare('SELECT * FROM users');
    $select->execute();
    $users=$select->fetchAll(PDO::FETCH_CLASS,'User');
    ?>
    <div class="container">
        <div class="row">
            <table class="table table-success table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
                    <th scope="col">Birthdate</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($users as $user):?>
                    <tr>
                        <th scope="row"><?=$user->id?></th>
                        <td><?=$user->name?></td>
                        <td><?=$user->email?></td>
                        <td><?=$user->city?></td><td><?=$user->birthdate?></td>
                        <td>
                            <a href="profile.php?id=<?=$user->id?>"><span class="material-symbols-outlined">visibility</span></a>
                        </td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
    <script src="./bootstrap-5.3.0-dist/js/bootstrap.bundle.js"></script>
    </body>
    </html>