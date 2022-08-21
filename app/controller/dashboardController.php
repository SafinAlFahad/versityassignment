<?php include_once('baseController.php');

function totalBooks()
{
    $s = "select sum(quantity) total_books from books";
    $data = readQuery($s);
    $data = json_decode($data);
    return $data;
}

function totalClients()
{
    $s = "select count(*) total_clients from customers";
    $data = readQuery($s);
    $data = json_decode($data);
    return $data;
}

function totalMembers()
{
    $s = "select count(*) total_members from employees";
    $data = readQuery($s);
    $data = json_decode($data);
    return $data;
}

function totalCategories()
{
    $s = "select count(*) total_categories from categories";
    $data = readQuery($s);
    $data = json_decode($data);
    return $data;
}

function totalBorrowBooks()
{
    $s = "SELECT count(*) total_borrow_books FROM rents where status = 'BORROWED'";
    $data = readQuery($s);
    $data = json_decode($data);
    return $data;
}

function todaysBorrowBooks()
{
    $s = "SELECT count(*) todaysBorrowBooks FROM rents where status = 'BORROWED' and rent_date=curdate()";
    $data = readQuery($s);
    $data = json_decode($data);
    return $data;
}
function totalSoldBooks()
{
    $first_day_this_month = date('Y-m-01');
    $last_day_this_month  = date('Y-m-t');
    $s = "select sum(quantity) total_sold_books from invoice_report_details where date_time between '$first_day_this_month ' and '$last_day_this_month'";
    $data = readQuery($s);
    $data = json_decode($data);
    return $data;
}
function totalTodaysSoldBooks()
{
    $s = "select sum(quantity) total_sold_books from invoice_report_details where date_time=curdate()";
    $data = readQuery($s);
    $data = json_decode($data);
    return $data;
}
function totalOutOfSotckBooks()
{
    $s = "select count(*) total_books from books where quantity = 0";
    $data = readQuery($s);
    $data = json_decode($data);
    return $data;
}




