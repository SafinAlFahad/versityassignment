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
            <?php if(isset($_SESSION['msg'])){ ?>
            <h1 class="text-success"><?= $_SESSION["msg"] ?></h1>
            <?php $_SESSION["msg"] = null; ?>
            <?php } ?>

            <h1>DETAILS:</h1>
            <br>
            ID: <?= $book_details[0]->id; ?>
            <br>
            <br>
            NAME: <?= $book_details[0]->title; ?>
            <br>
            <br>
            ISBN: <?= $book_details[0]->isbn; ?>
            <br>
            <br>
            PUBLISHER: <?= $book_details[0]->publisher_name; ?>
            <br>
            <br>
            AUTHOR: <?= $book_details[0]->author_name; ?>
            <br>
            <br>
            DATE TIME: <?= $book_details[0]->date_time; ?>
            <br>
            <br>
            CATEGORY: <?= $book_details[0]->category_name; ?>
            <br>
            <br>
            BOOK TYPE: <?= $book_details[0]->book_type_name; ?>
            <br>
            <br>
            SELLING PRICE: <?= $book_details[0]->selling_price; ?>
            <br>
            <br>
            RENT PRICE: <?= $book_details[0]->rent_price; ?>
            <br>
            <br>
            STATUS: <?= $book_details[0]->status; ?>
            <br>
            <br>

            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Delete</button>
            <a href="index.php" class="btn btn-warning">BACK TO LIST</a>
            <br>
             <br>
             <br>
             <br>
             <br>
             <br>


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

                        <input type="hidden" name="id" value=" <?= $book_details[0]->id; ?>">
                        <p class="text-danger">Are you sure want to delete?</p>
                        

                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-warning float-left"  value="close" data-dismiss="modal">Close</button>
                        <input class="btn btn-danger float-right" type="submit" name="delete" value="Delete">
    
                    </div>
                </div>
               
            </form>
            
        </div>

    
        </body>

</html>