<?php include_once('../config.php'); 
        include_once(CON_FRONT.'employeeController.php'); 
        $employees = index();
        // validateAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <?php include_once('../layout/links.php') ?>
</head>

<body>
    <?php include_once('../layout/admin.php') ?>
    <div class="container-fluid" style="margin-top:80px">
        <br>
        <h3> EMPLOYEE LIST:
                            <a href="create.php" class="btn btn-info float-right">ADD NEW EMPLOYEE:</a></h3>
        <?php if(isset($_SESSION['del_msg'])){ ?>
            <h1 class="text-success"><?= $_SESSION["del_msg"] ?></h1>
            <?php $_SESSION["del_msg"] = null; ?>
            <?php } ?>
        <br>
        <br>
        <table class="table table-hover table-primary" id="dataTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PHONE</th>
                    <th>TYPE</th>
                    <th>ADDRESS</th>
                    <th>JOIN DATE</th>
                    <th>SALARY</th>
                    <th>OPTION</th>
                </tr>
            </thead>

            <tbody>
                <?php
        foreach($employees as $e)
        { ?>
                <tr>
                    <th><?= $e->id; ?></th>
                    <th><?= $e->name; ?></th>
                    <th><?= $e->phone; ?></th>
                    <th><?= $e->type; ?></th>
                    <th><?= $e->address; ?></th>
                    <th><?= $e->join_date; ?></th>
                    <th><?= $e->salary; ?></th>
                    <td><a href="show.php?id=<?= $e->id ?>" class="btn btn-success">details</a> | 
                    <a href="edit.php?id=<?= $e->id ?>" class="btn btn-warning">edit</a> | 
                   
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
</body>

</html>
<?php include_once('../layout/footerLinks.php') ?>
<script src="<?= RSR ?>/js/datatable.js"></script>
<br>
<br>
<br>