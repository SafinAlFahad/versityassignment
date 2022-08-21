<?php include_once('../config.php'); 
        include_once(CON_FRONT.'invoiceController.php'); 
        $invoice_details = show();
        $invoice = invoice();
        $books = invoiceBooks();
        $totalBooks = totalBooks();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <?php include_once('../layout/links.php') ?>
</head>
<style>
    @media print {
        body * {
            visibility: hidden;
        }

        #section-to-print,
        #section-to-print * {
            visibility: visible;
        }

        #section-to-print {
            position: relative;
            left: 0;
            top: 0;
        }
    }
</style>

<body onload="window.print()" class="container">
    <br>
    <div class="float-right">
        <a href="index.php" class="btn btn-warning">Invoice List</a>
        <a href="../dashboard/index.php" class="btn btn-success">Home</a>
    </div>
    <br>
    <div id="section-to-print">
        <div style="text-align:center">
            <br>
            <h1>INVOICE</h1>
            <h4>LIBRARY MANAGEMENT SYSTEM</h4>
            <br>
        </div>
        <table class="table  table-bordered" style="width:30%">
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
        <table class="table  table-bordered">
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
        <br>

        <h5 style="text-align:center">THANkS FOR YOUR VISITING</h5>
    </div>


</body>

</html>
<script>

</script>