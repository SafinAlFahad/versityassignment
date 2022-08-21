<?php
    include_once '../config.php';
    include_once CON_FRONT.'customerController.php';
    $customers = show();
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
                ID: <?= $customers[0]->id ?>
                <br>
                <br>
                NAME: <input type="text" name="name" class="form-control" value="<?= $customers[0]->name ?>">
                <br>
                <br>
                PHONE: <input type="number" name="phone" class="form-control" value="<?= $customers[0]->phone ?>">
                <br>
                <br>
                EMAIL: <input type="text" name="email" class="form-control" value="<?= $customers[0]->email ?>">
                <br>
                <br>
                JOIN DATE: <input type="date" name="join_date" class="form-control"
                    value="<?= $customers[0]->join_date ?>">
                <br>
                <br>
                STATUS: <input type="text" name="status" id="" class="form-control" class="form-control"
                    value="<?= $customers[0]->status ?>">
                <br>
                <br>

                <input type="submit" name="update" id="" class="btn btn-success" value="SUBMIT">
            </form>
            <br>
            <a href="index.php" class="btn btn-warning">BACK TO LIST</a>
            <br>
            <br>
            <br>
        </body>

</html>