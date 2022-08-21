<?php include_once('../config.php'); 
        include_once(CON_FRONT.'invoiceController.php'); 
        $invoice_details = index();
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
        <h3>INVOICE LIST:
                            <a href="create.php" class="btn btn-info float-right">ADD NEW INVOICE:</a></h3>
        <br>
        <br>
        <table class="table table-hover table-primary" id="dataTable">
            <thead>
            <tr>
                <th>ID</th>
                <th>AMOUNT</th>
                <th>CUSTOMER NAME</th>
                <th>EMPLOYEE NAME</th>
                <th>OPTION</th>
            </tr>
            </thead>
            
            <tbody>
            <?php
        foreach($invoice_details as $i)
        { ?>
            <tr>
                <th><?= $i->id; ?></th>
                <th><?= $i->amount; ?></th>
                <th><?= $i->customer_name; ?></th>
                <th><?= $i->employee_name; ?></th>
                <td><a href="show.php?id=<?= $i->id ?>" class="btn btn-success">details</a></td>

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