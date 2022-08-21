<?php include_once('../config.php'); 
        include_once(CON_FRONT.'loginController.php'); 
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>Document</title>
  <?php include_once('../layout/links.php') ?>
</head>

<body>

  <body style="background-image: url('<?= RSR ?>/images/library2.jpg');">
    <div id="login">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      

      <div class="container">
        <div id="login-row" class="row justify-content-center align-items-center">
          <div id="login-column" class="col-md-6">
            <div id="login-box" class="col-md-12">
              <form id="login-form" class="form" action="" method="post">
              <h3 class="text-center text-white">LIBRARY MANAGEMENT SYSTEM</h3>
              <br>
                <h3 class="text-center text-white">LOGIN</h3>


                <div class="form-group">
                  <label for="username" class="text-info">Username:</label><br>
                  <input type="text" name="username" id="username" class="form-control" placeholder="Enter username"
                    name="username" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="password" class="text-info">Password:</label><br>
                  <input type="password" name="password" id="password" class="form-control" placeholder="Enter password"
                    name="password" required>
                  <div class="valid-feedback">Valid.</div>
                  <div class="invalid-feedback">Please fill out this field.</div>
                </div>
                <div class="form-group">
                  <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me"
                        name="remember-me" type="checkbox"></span></label><br>

                  <?php if(isset($_SESSION['msg'])){ ?>
                  <p class="text-danger"><?= $_SESSION["msg"] ?></p>
                  <?php $_SESSION["msg"] = null; ?>

                  <?php } ?>



                  <input type="submit" name="submit" class="btn btn-danger btn-md" value="SUBMIT">

                </div>
                <div id="register-link" class="text-right">
                </div>
              </form>
            </div>
          </div>
        </div>
  </body>

</html>