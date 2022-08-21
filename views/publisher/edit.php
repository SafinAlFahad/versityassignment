<?php
    include_once '../config.php';
    include_once CON_FRONT.'publisherController.php';
    $publishers = show();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include_once('../layout/links.php') ?>
</head>

<body style="margin-left:80px;">
    <?php include_once('../layout/admin.php') ?>
    <div class="container-fluid" style="margin-top:80px;">

        <body class="container">
            <h1>EDIT:</h1>
            <form action="" method="post">
                ID: <?= $publishers[0]->id ?>
                <br>
                <br>
                NAME: <input type="text" name="name" class="form-control" value="<?= $publishers[0]->name ?>">
                <br>
                <br>
                DESCRIPTION: <input type="text" name="description" class="form-control"
                    value="<?= $publishers[0]->description ?>">
                <br>
                <br>

                <input type="submit" name="update" id="" class="btn btn-success" value="SUBMIT">
            </form>
            <br>
            <a href="index.php" class="btn btn-warning">BACK TO LIST</a>
        </body>

</html>