<?php include_once('../config.php'); 
        include_once(CON_FRONT.'publisherController.php');    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include_once('../layout/links.php') ?>
</head>

<body>
    <?php include_once('../layout/admin.php') ?>
    <div class="container" style="margin-top:80px">
        <div class="row">
            <div class="col col-md-6 col-sm-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">CREATE NEW PUBLISHER LIST:</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form" class="bg-info">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">NAME:</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Enter name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputdescription">DESCRIPTION:</label>
                                    <input type="Text" class="form-control" name="description"
                                        id="exampleInputdescriptionStatus" placeholder="Enter description">
                                </div>


                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <input type="submit" name="create" class="btn btn-success" value="SUBMIT">
                                    <br>
                                    <br>
                                    <a href="index.php" class="btn btn-warning">BACK TO LIST</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <br>
</body>

</html>