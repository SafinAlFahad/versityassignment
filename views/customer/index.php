<?php include_once('../config.php'); 
        include_once(CON_FRONT.'customerController.php'); 
        $customers = index();
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
        <h3>CUSTOMER LIST:
                            <a href="create.php" class="btn btn-info float-right">ADD NEW CUSTOMER:</a></h3>
        <br>
        <br>
        <table class="table table-hover table-primary" id="dataTable">
            <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>PHONE</th>
                <th>EMAIL</th>
                <th>OPTION</th>
            </tr>
            </thead>
            
            <tbody>
            <?php
        foreach($customers as $c)
        { ?>
            <tr>
                <th><?= $c->id; ?></th>
                <th><?= $c->name; ?></th>
                <th><?= $c->phone; ?></th>
                <th><?= $c->email; ?></th>
                <td><a href="show.php?id=<?= $c->id ?>" class="btn btn-success">details</a> | 
                <a href="edit.php?id=<?= $c->id ?>" class="btn btn-warning">edit</a> | 
                <a href="delete.php?id=<?= $c->id ?>" class="btn btn-danger">delete</a></td>

            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</body>

</html>
<?php include_once('../layout/footerLinks.php') ?>
<script src="<?= RSR ?>/js/datatable.js"></script>
<br>
<br>
<br>