<?php include_once('../config.php'); 
        include_once(CON_FRONT.'authorController.php'); 
        $authors = index();
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
        <?php if(isset($_SESSION['msg'])){ ?>
        <h1 class="text-success"><?= $_SESSION["msg"] ?></h1>
        <?php $_SESSION["msg"] = null; ?>
        <?php } ?>

        <br>
        <h3>AUTHOR LIST:
                        <a href="create.php" class="btn btn-info float-right">ADD NEW AUTHOR:</a></h3>
        <br>
        <br>
        <table class="table table-hover table-primary" id="dataTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>DESCRIPTION</th>
                    <th>OPTION</th>
                </tr>
            </thead>
            <tbody>
                <?php
        foreach($authors as $a)
        { ?>
                <tr>
                    <th><?= $a->id; ?></th>
                    <th><?= $a->name; ?></th>
                    <th><?= $a->description; ?></th>

                    <td><a href="show.php?id=<?= $a->id ?>" class="btn btn-success">details</a> | <a
                            href="edit.php?id=<?= $a->id ?>" class="btn btn-warning">edit</a> | <a
                            href="delete.php?id=<?= $a->id ?>" class="btn btn-danger">delete</a></td>


                </tr>
                <?php } ?>
            </tbody>

        </table>
        <br>
        <br>
        <br>
        <br>
    </div>
</body>

</html>
<?php include_once('../layout/footerLinks.php') ?>
<script src="<?= RSR ?>/js/datatable.js"></script>
<br>
<br>
<br>