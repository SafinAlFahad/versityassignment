<?php
    include_once '../config.php';
    include_once CON_FRONT.'employeeController.php';
    $employees = show();
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
                ID: <?= $employees[0]->id ?>
                <br>
                <br>
                NAME: <input type="text" name="name" class="form-control" value="<?= $employees[0]->name ?>">
                <br>
                <br>
                PHONE: <input type="number" name="phone" class="form-control" value="<?= $employees[0]->phone ?>">
                <br>
                <br>
                ADDRESS: <input type="text" name="address" class="form-control" value="<?= $employees[0]->address ?>">
                <br>
                <br>
                JOIN DATE: <input type="date" name="join_date" class="form-control"
                    value="<?= $employees[0]->join_date ?>">
                <br>
                <br>
                SALARY: <input type="text" name="salary" id="" class="form-control" class="form-control"
                    value="<?= $employees[0]->salary ?>">
                <br>
                <br>
                TYPE: <select name="type" id="" class="form-control">
                    <?php 
            if($employees[0]->type == "Admin")
            { 
            ?>
                    <option value="Admin" selected>ADMIN</option>
                    <option value="SalesMan">SALESMAN</option>
                    <?php 
            } 
            else 
            { 
            ?>
                    <option value="Admin">ADMIN</option>
                    <option value="SalesMan" selected>SALESMAN</option>
                    <?php 
            } 
            ?>

                </select>
                <br>
                <br>

                <input type="submit" name="update" id="" class="btn btn-success" value="SUBMIT">
            </form>
            <br>
            <a href="index.php" class="btn btn-warning">BACK TO LIST</a>
            <br>
            <br>
            <br>
            <br>
            
        </body>

</html>