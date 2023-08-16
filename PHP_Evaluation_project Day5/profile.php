<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['id'])) { ?>
    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Starting PHP Connection-->
        <?php
        require_once 'connection.php';
        require_once 'User.php';
        $select = $connection->prepare('SELECT * FROM users WHERE id=?');
        // TO Protect Your DB From SQL injection We use ? placeholder instead of value and put value inside execute method
        $select->execute([$_GET['id']]);
        $select->setFetchMode(PDO::FETCH_CLASS, 'User');
        $user = $select->fetch();
        ?>
        <!-- Starting HTML-->
        <div class="wrapper">
            <div class="profile-card js-profile-card">
                <div class="profile-card__img">
                    <img src="<?= ($user->image) ? "imgs/" . $user->image : "imgs/pngegg.png"; ?>" alt="profile card">
                </div>

                <div class="profile-card__cnt js-profile-cnt">
                    <div class="profile-card__name"><?= $user->name; ?></div>
                    <div class="profile-card__txt">Email: <?= $user->email; ?></div>
                    <div class="profile-card__txt">City: <?= $user->city; ?></div>
                    <div class="profile-card__txt">Birthdate: <?= $user->birthdate; ?></div>
                    <a href="view.php">Back</a>
                </div>
            </div>
        </div>
        <script src="js/script.js" rel="script"></script>
    </body>

    </html>
<?php } else {
    header("Location: index.php");
}

?>