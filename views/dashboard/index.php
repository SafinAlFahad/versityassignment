<?php include_once('../config.php'); 
        include_once(CON_FRONT.'dashboardController.php'); 
        $totalBooks = totalBooks();
        $totalClients = totalClients();
        $totalMembers = totalMembers();
        $totalCategories = totalCategories();
        $totalBorrowBooks = totalBorrowBooks();
        $todaysBorrowBooks = todaysBorrowBooks();
        $totalSoldBooks = totalSoldBooks();
        $totalTodaysSoldBooks = totalTodaysSoldBooks();
        $totalOutOfSotckBooks = totalOutOfSotckBooks();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <?php include_once('../layout/links.php') ?>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>
    <?php include_once('../layout/admin.php') ?>
    <div class="container" style="margin-top:80px">
        <div class="card-columns">
            <div class="card bg-muted">
                <div class="card-body ">
                    <div class="row">
                        <div class="col col-md-8">
                            <h1><?= $totalSoldBooks[0]->total_sold_books; ?></h1>
                            <p class="card-text">THIS MONTH SOLD BOOK</p>
                        </div>
                        <div class="col col-md-4">

                            <div class="icon">
                                <i class="fas fa-address-book" style="font-size: 5em"></i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="card bg-primary">
                <div class="card-body ">
                    <div class="row">
                        <div class="col col-md-8">
                            <h1><?= $totalBooks[0]->total_books; ?></h1>
                            <p class="card-text">NUMBER OF BOOKS</p>
                        </div>
                        <div class="col col-md-4">

                            <div class="icon">
                                <i class="fas fa-book-open" style="font-size: 5em"></i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            

            <div class="card bg-success">
                <div class="card-body ">
                    <div class="row">
                        <div class="col col-md-8">
                            <h1><?= $totalTodaysSoldBooks[0]->total_sold_books; ?></h1>
                            <p class="card-text">TODAY'S SOLD BOOK</p>
                        </div>
                        <div class="col col-md-4">

                            <div class="icon">
                                <i class="fas fa-book" style="font-size: 5em"></i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>

            
            <div class="card bg-info">
                <div class="card-body ">
                    <div class="row">
                        <div class="col col-md-8">
                            <h1><?= $totalMembers[0]->total_members; ?></h1>
                            <p class="card-text">NUMBER OF EMPLOYEE</p>
                        </div>
                        <div class="col col-md-4">

                            <div class="icon">
                                <i class="fas fa-user-friends" style="font-size: 5em"></i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="card bg-danger">
                <div class="card-body ">
                    <div class="row">
                        <div class="col col-md-8">
                            <h1><?= $totalOutOfSotckBooks[0]->total_books; ?></h1>
                            <p class="card-text">OUT OF STOCK BOOKS</p>
                        </div>
                        <div class="col col-md-4">

                            <div class="icon">
                                <i class="fas fa-book-dead" style="font-size: 5em"></i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            
            <div class="card bg-secondary">
                <div class="card-body ">
                    <div class="row">
                        <div class="col col-md-8">
                            <h1><?= $totalCategories[0]->total_categories; ?></h1>
                            <p class="card-text">TOTAL CATEGORIES</p>
                        </div>
                        <div class="col col-md-4">

                            <div class="icon">
                                <i class="fas fa-list-ol" style="font-size: 5em"></i>
                            </div>
                        </div>
                    </div>


                </div>
            </div>





        </div>
    </div>
    </div>
</body>

</html>