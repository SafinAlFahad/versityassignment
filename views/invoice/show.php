<?php
    include_once '../config.php';
    include_once CON_FRONT.'invoiceController.php';
    $invoice_details = show();
    $invoice = invoice();
    $books = invoiceBooks();
    $totalBooks = totalBooks();
    // print_r($invoice_details);
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
            <table class="table  table-bordered table-warning" style="width:30%">
        <tr>
                <th style="text-align:right">ID</th>
                <th><?= $invoice_details[0]->id ?></th>
            </tr>
            <tr>
            <tr>
                <th style="text-align:right">DATE</th>
                <th><?= $invoice_details[0]->date_time ?></th>
            </tr>
            <tr>
                <th style="text-align:right">Customer Name</th>
                <th><?= $invoice_details[0]->customer_name ?></th>
            </tr>
            <tr>
                <th style="text-align:right">Employee Name</th>
                <th><?= $invoice_details[0]->employee_name ?></th>
            </tr>
            <tr>
                <th style="text-align:right">TOTAL BOOKS</th>
                <th><?= $totalBooks[0]->total_books ?></th>
            </tr>
            <tr>
                <th style="text-align:right">TOTAL</th>
                <th><?= $invoice_details[0]->amount ?></th>
            </tr>
        </table>
        <table class="table  table-bordered table-success">
            <tr>
                <th>BOOK ID</th>
                <th>TITLE</th>
                <th>QUANTITY</th>
                <th>PRICE</th>
                <th>TOTAL PRICE</th>
            </tr>

            <?php
            foreach($books as $b)
            { ?>
            <tr>
                <td><?= $b->book_id; ?></td>
                <td><?= $b->book_title; ?></td>
                <td><?= $b->quantity; ?></td>
                <td><?= $b->price ?></td>
                <td><?= $b->total_price; ?></td>


            </tr>
            <?php } ?>
        </table>
            <br>
        
            <a href="index.php" class="btn btn-warning">BACK TO LIST</a>
            <br>
            <br>
            <br>
            <br>
            <br>

        </body>

</html>