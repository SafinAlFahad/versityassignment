<?php
    include_once '../config.php';
    include_once CON_FRONT.'employeeController.php';
    $employees = show();
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

            <h1>DETAILS:</h1>
            <br>
            ID: <?= $employees[0]->id; ?>
            <br>
            <br>
            NAME: <?= $employees[0]->name; ?>
            <br>
            <br>
            PHONE: <?= $employees[0]->phone; ?>
            <br>
            <br>
            ADDRESS: <?= $employees[0]->address; ?>
            <br>
            <br>
            JOIN DATE: <?= $employees[0]->join_date; ?>
            <br>
            <br>
            SALARY: <?= $employees[0]->salary; ?>
            <br>
            <br>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</button>
            <a href="index.php" class="btn btn-warning">BACK TO LIST</a>



            <!-- modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">
                    <form action="" method="post">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">

                                <input type="hidden" name="id" value=" <?= $employees[0]->id; ?>">
                                <p class="text-danger">Are you sure want to delete?</p>


                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-warning float-left" value="close"
                                    data-dismiss="modal">Close</button>
                                <input class="btn btn-danger float-right" type="submit" name="delete" value="Delete">
                            </div>
                        </div>
                    </form>
                </div>



        </body>

</html>