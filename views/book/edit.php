<?php
    include_once '../config.php';
    include_once CON_FRONT.'bookController.php';
    $book_details = show();
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
                ID: <?= $book_details[0]->id ?>
                <br>
                <br>
                NAME: <input type="text" name="title" class="form-control" value="<?= $book_details[0]->title ?>">
                <br>
                <br>
                ISBN: <input type="text" name="isbn" id="" class="form-control" class="form-control"
                    value="<?= $book_details[0]->isbn ?>">
                <br>
                <br>
                PUBLISHER: <input type="text" name="publisher_id" id="" class="form-control"
                    value="<?= $book_details[0]->publisher_id ?>">
                <br>
                <br>
                AUTHOR: <input type="text" name="author_id" id="" class="form-control"
                    value="<?= $book_details[0]->author_id ?>">
                <br>
                <br>
                DATE TIME: <input type="date" name="date_time" id="" class="form-control"
                    value="<?= $book_details[0]->date_time ?>">
                <br>
                <br>
                CATEGORY: <input type="text" name="category_id" id="" class="form-control"
                    value="<?= $book_details[0]->category_id ?>">
                <br>
                <br>
                BOOK TYPE: <input type="text" name="book_type_id" id="" class="form-control"
                    value="<?= $book_details[0]->book_type_id ?>">
                <br>
                <br>
                SELLING PRICE: <input type="text" name="selling_price" id="" class="form-control"
                    value="<?= $book_details[0]->selling_price ?>">
                <br>
                <br>
                RENT PRICE: <input type="text" name="rent_price" id="" class="form-control"
                    value="<?= $book_details[0]->rent_price ?>">
                <br>
                <br>
                STATUS: <input type="text" name="status" id="" class="form-control"
                    value="<?= $book_details[0]->status ?>">
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