<?php include_once('../config.php'); 
        include_once(CON_FRONT.'invoiceController.php'); 
        if(!isset($_REQUEST['cid']))
        {
            header('Location: create.php?cid=0');
            return;
        }
        $books = books();
        $cartBooks = cartBooks();
        $totalQuantity = 0;
        $totalPrice = 0;
        $i = 0;
        if($_REQUEST['cid'] == 0 || $_REQUEST['cid'] == "")
        {
            $customerName = "";
        }
        else
        {
            $customerName = $_REQUEST['cid'];
        }
        $customers = customerList();
        
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <?php include_once('../layout/links.php') ?>
    <link rel="stylesheet" href="<?= RSR ?>/css/invoice.css">
</head>

<body>
    <?php include_once('../layout/admin.php') ?>
    <div class="container-fluid" style="margin-top:80px">



        <div class="row">
            <div class="col col-md-8">
                <form action="" method="post" id="form">
                    <div class="row">
                        <div class="col col-md-12">
                            <div class="row">
                                <div class="col col-md-2">
                                    <span>CUSTOMER NAME</span>
                                </div>
                                <div class="col col-md-4">
                                    <input type="text" name="customerName" list="customerName" class="form-control"
                                        autocomplete="off" style="width: 100%;" id="customer"
                                        value="<?= $customerName ?>">
                                    <datalist id="customerName">
                                    <?php foreach ($customers as $c) { ?>
                                <option value="<?= $c->id ?>"><?= $c->name ?> -- phone(<?= $c->phone ?>)</option>
                                <?php } ?>
                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="col col-md-2">
                            <label for="">Auto Select</label>
                            <label class="switch">

                                <?php if(!isset($_SESSION['auto'])){ 
                                $_SESSION['auto'] = "checked";
                                   } ?>

                                <input type="checkbox" <?= $_SESSION['auto'] ?> id="auto" name="autoCheckBox">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="col col-md-6">
                            <input type="text" name="product" list="productName" class="form-control" autocomplete="off"
                                style="width: 100%;" name="product" id="pdt">
                            <datalist id="productName">
                                <?php foreach ($books as $b) { ?>
                                <option value="<?= $b->id ?>"><?= $b->title ?> -- ISBN(<?= $b->isbn ?>) --
                                    <?= $b->selling_price ?> TK.</option>
                                <?php } ?>
                            </datalist>


                            <?php if(isset($_SESSION['message'])){ 
                                 if($_SESSION['message'] == "true"){ ?>
                            <!-- <h4 class="text-success msg">ADDED SUCCESSFULLY</h4> -->
                            <?php }
                                else if($_SESSION['message'] == "false"){ ?>
                            <!-- <h4 class="text-danger msg">INVALID BOOK NAME</h4> -->
                            <?php }
                            }
                            
                            ?>


                        </div>

                        <div class="col col-md-2">
                            <input type="number" class="form-control" name="quantity" value="1">
                        </div>
                        <div class="col col-md-2">
                            <input type="submit" class="btn btn-success" value="ADD" name="add" id="add">
                            &nbsp &nbsp
                            <form action="" method="post">
                                <input type="submit" class="btn btn-danger" name="clear" value="CLEAR ALL">
                            </form>

                        </div>
                    </div>
                </form>


                <!-- <input type="text" class="form-control" placeholder="ENTER PRODUCT NAME OR CODE" list="suggestions">
            <datalist id="suggestions" style="width: 200%;">
                <option value="JUCE -- 1231231 --10TK">
                <option value="Red">
                <option value="Green">
                <option value="Blue">
                <option value="White">
            </datalist> -->
                <br>


                <table class="table table-hover table-success">
                    <tr>
                        <th>SL</th>
                        <th>NAME</th>
                        <th>ISBN</th>
                        <th>PRICE</th>
                        <th>QUANTITY</th>
                        <th>TOTAL PRICE</th>
                        <th>OPTION</th>
                    </tr>
                    <?php foreach ($cartBooks as $b) { ?>
                    <tr>
                        <td><?= ++$i; ?></td>
                        <td><?= $b->book_title ?></td>
                        <td><?= $b->book_isbn ?></td>
                        <td><?= $b->selling_price ?></td>
                        <td><?= $b->quantity ?></td>
                        <td><?= $b->selling_price * $b->quantity ?></td>
                        <td><a href="delete.php?id=<?= $b->id ?>" class="btn btn-danger">DELETE</a></td>
                    </tr>
                    <?php
                    $totalQuantity = $totalQuantity + $b->quantity;
                    $totalPrice += $b->selling_price * $b->quantity;
                } ?>

                </table>
            </div>
            <div class="col col-md-4">
                <br>
                <br>
                <br>
                <input type="hidden" value="<?= $totalPrice ?>" id="totalPrice">
                <table class="table table-danger">
                    <tr>
                        <th>TOTAL PRODUCT QUANTITY</th>
                        <th><?= $totalQuantity ?></th>
                    </tr>
                    <tr>
                        <th>TOTAL PRICE</th>
                        <th><?= $totalPrice ?></th>
                    </tr>
                    <tr>
                        <th>CASH</th>
                        <th><input type="text" class="form-control" id="cash"></th>
                    </tr>
                    <tr>
                        <th>RETURN</th>
                        <th><input type="text" disabled class="form-control" id="return"></th>
                    </tr>
                    <tr>
                        <th></th>
                        <th><form action="" method="post">
                        <input type="hidden" name="customerName" value="<?= $customerName ?>">
                        <input type="submit" name="invoiceStore" id="" class="btn btn-success float-right" value="SAVE AND PRINT">
                        </form></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
<script>
    $(function () {
        $(".msg").delay(2000).fadeOut();
        $("#pdt").change(function () {
            if ($("#auto").is(":checked")) {
                $("#add").click();
            }

        });
        $("#pdt").on('keypress', function (e) {
            if (e.which == 13) {
                if ($("#auto").attr('checked', false)) {
                    $("#form").submit(function (e) {
                        e.preventDefault();
                        console.log("checked");
                    });
                }

            }
        });
        $("#add").click(function () {
            $("#form").submit(function (e) {
                this.submit();
                console.log("submit");
            });

        });

        $("#pdt").focus();
        $("#cash").keyup(function () {
            var r = 0;
            r = $("#cash").val() - $("#totalPrice").val();
            if (r > 0) {
                $("#return").val(r);

                $("#return").removeClass("text-danger");
            } else {
                $("#return").val(r);
                $("#return").addClass("text-danger");
            }
            if ($("#cash").val() == "") {
                $("#return").val("");
            }

            var total = $("#cash").val() - $("#totalPrice").val();
            $("#cash").removeClass("bg-success");
            $("#cash").removeClass("text-light");
            if (total >= 0) {
                $("#cash").addClass("bg-success");
                $("#cash").addClass("text-light");
            }


        });

    })
</script>