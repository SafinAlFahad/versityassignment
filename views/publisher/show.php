<?php
    include_once '../config.php';
    include_once CON_FRONT.'publisherController.php';
    $publishers = show();
    // print_r($emp);
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
            <?php if(isset($_SESSION['msg'])){ ?>
            <h1 class="text-success"><?= $_SESSION["msg"] ?></h1>
            <?php $_SESSION["msg"] = null; ?>
            <?php } ?>

            <h1>DETAILS:</h1>
            <br>
            ID: <?= $publishers[0]->id; ?>
            <br>
            <br>
            NAME: <?= $publishers[0]->name; ?>
            <br>
            <br>
            DESCRIPTION: <?= $publishers[0]->description; ?>
            <br>
            <br>

            <a href="edit.php?id=<?= $publishers[0]->id; ?>" class="btn btn-success">EDIT</a>
            <br>
            <br>
            <a href="delete.php?id=<?= $publishers[0]->id; ?>" class="btn btn-danger">DELETE</a>
            <br>
            <br>
            <a href="index.php" class="btn btn-warning">BACK TO LIST</a>
            <br>

        </body>

</html>