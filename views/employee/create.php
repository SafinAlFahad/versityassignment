<?php include_once('../config.php'); 
        include_once(CON_FRONT.'employeeController.php'); 
        validateAdmin();    
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
                        <h3 class="card-title">CREATE NEW EMPLOYEE LIST:</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <form role="form" method="POST" action="" class="bg-info">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputname">NAME:</label>
                                    <input type="Text" class="form-control" name="name" id="exampleInputname"
                                        placeholder="Enter name">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputphone">PHONE:</label>
                                    <input type="number" class="form-control" name="phone" id="exampleInputphone"
                                        placeholder="Enter phone no">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputaddress">ADDRESS:</label>
                                    <input type="Text" class="form-control" name="address" id="exampleInputaddress"
                                        placeholder="Enter address">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputsalary">SALARY:</label>
                                    <input type="Text" class="form-control" name="salary" id="exampleInputsalary"
                                        placeholder="Enter amount">
                                </div>

                                <div class="form-group">
                                    <label for="username">USERNAME:</label>
                                    <input type="text" class="form-control" name="username" id="username"
                                        placeholder="Enter name">
                                </div>

                                <div class="form-group">
                                    <label for="password">PASSWORD:</label>
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Enter password">
                                </div>

                                TYPE: <select name="type" id="" class="form-control">
                                    <option value="-1">--Selecet One--</option>
                                    <option value="admin">ADMIN</option>
                                    <option value="salesman">SALESMAN</option>
                                </select>

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