<?php
    include_once '../config.php';
    include_once CON_FRONT.'customerController.php';
    $customers = show();
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
            ID: <?= $customers[0]->id; ?>
            <br>
            <br>
            NAME: <?= $customers[0]->name; ?>
            <br>
            <br>
            PHONE: <?= $customers[0]->phone; ?>
            <br>
            <br>
            EMAIL: <?= $customers[0]->email; ?>
            <br>
            <br>
            JOIN DATE: <?= $customers[0]->join_date; ?>
            <br>
            <br>
            STATUS: <?= $customers[0]->status; ?>
            <br>
            <br>
            <a href="edit.php?id=<?= $customers[0]->id; ?>" class="btn btn-success">EDIT</a>
            <br>
            <br>
            <a href="delete.php?id=<?= $customers[0]->id; ?>" class="btn btn-danger">DELETE</a>
            <br>
            <br>
            <a href="index.php" class="btn btn-warning">BACK TO LIST</a>
            <br>
            <br>
            <br>
            <br>

        </body>

</html>