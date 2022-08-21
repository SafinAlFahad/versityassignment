<?php include_once('../config.php'); 
        include_once(CON_FRONT.'bookController.php'); 
        $book_details = index();
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
        <h3>BOOK LIST:
                        <a href="create.php" class="btn btn-info float-right">ADD NEW BOOK:</a></h3>
        <br>
        <br>
        <table class="table table-hover table-primary" id="dataTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>BOOK NAME</th>
                <th>ISBN</th>
                <th>PUBLISHER</th>
                <th>AUTHOR</th>
                <th>DATE TIME</th>
                <th>CATEGORY</th>
                <th>SELLING PRICE</th>
                <th>QUANTITY</th>
                <th>STATUS</th>
                <th>OPTION</th>
            </tr>
            </thead>
            <tbody>
            <?php
        foreach($book_details as $b)
        { ?>
            <tr>
                <th><?= $b->id; ?></th>
                <th><?= $b->title; ?></th>
                <th><?= $b->isbn; ?></th>
                <th><?= $b->publisher_name; ?></th>
                <th><?= $b->author_name; ?></th>
                <th><?= $b->date_time; ?></th>
                <th><?= $b->category_name; ?></th>
                <th><?= $b->selling_price; ?></th>
                <th><?= $b->quantity; ?></th>
                <th><?= $b->status; ?></th>
                <td><a href="show.php?id=<?= $b->id ?>" class="btn btn-success">details</a> | <a
                        href="edit.php?id=<?= $b->id ?>" class="btn btn-warning">edit</a> | 
                        <a href="delete.php?id=<?= $b->id ?>" class="btn btn-danger">delete</a></td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
    <br>
    <br>
    <br>
</body>

</html>
<?php include_once('../layout/footerLinks.php') ?>
<script src="<?= RSR ?>/js/datatable.js"></script>
<br>
<br>
<br>