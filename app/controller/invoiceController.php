<?php include_once('baseController.php');
if (isset($_REQUEST['clear'])) {
    clear();
}

//this is to test git commit
function index()
{
    $s = "select * from invoice_details order by id";
    $invoice_details = readQuery($s);
    $invoice_details = json_decode($invoice_details);
    return $invoice_details;
}

function show()
{
    $id = $_REQUEST['id'];
    $s = "select * from invoice_details where id = $id";
    $json = readQuery($s);                  //json
    $data = json_decode($json);             //array
    return $data;
}


function customerList()
{
    $s = "select * from customers";
    $customerList = readQuery($s);
    $customerList = json_decode($customerList);
    return $customerList;
}

function employeeList()
{
    $s = "select * from employees";
    $employeeList = readQuery($s);
    $employeeList = json_decode($employeeList);
    return $employeeList;
}


//saving to data base
if(isset($_REQUEST['create']))
{
    store();
}
function store()
{
    $amount = $_REQUEST['amount'];
    $date_time = $_REQUEST['date_time'];
    $customer_id = $_REQUEST['customer_id'];
    $employee_id = $_REQUEST['employee_id'];
    
//    print_r($GLOBALS);

    $s = "INSERT INTO `invoices`(`id`, `amount`,`date_time`, `employee_id`,`customer_id`) VALUES (null,'$amount', $date_time','$employee_id')";
    $id = executeQuery($s);
    print_r($id);
    if($id > 0)
    {
        $_SESSION["msg"] = "SUCCESSFULLY CREATED";
        header('Location: show.php?id='.$id);//redirect
    }
    return;

}

if(isset($_REQUEST['update']))
{
    update();
}
function update()
{
    $id = $_REQUEST['id'];
    $title = $_REQUEST['title'];
    $isbn = $_REQUEST['isbn'];
    $publisher_id = $_REQUEST['publisher_id'];
    $language = $_REQUEST['language'];
    $number_of_page = $_REQUEST['number_of_page'];
    $author_id = $_REQUEST['author_id'];
    $publish_date = $_REQUEST['publish_date'];
    $version = $_REQUEST['version'];
    $category_id = $_REQUEST['category_id'];
    $description = $_REQUEST['description'];
    $status = $_REQUEST['status'];
    $book_type_id = $_REQUEST['book_type_id'];
    $buying_price = $_REQUEST['buying_price'];
    $selling_price = $_REQUEST['selling_price'];
    $rent_price = $_REQUEST['rent_price'];
    $location = $_REQUEST['location'];
    $fine = $_REQUEST['fine'];
   
    
    $type = $_REQUEST['type'];
    $sql = "UPDATE `books` SET `title`='$title',`isbn`='$isbn',`publisher_id`='$publisher_id', `language`='$language', `number_of_page`='$number_of_page',`author_id`='$author_id', `publish_date`='$publish_date', `version`='$version',`category_id`='$category_id', `description`='$description', `status`='$status',`book_type_id`='$book_type_id', `buying_price`='$buying_price',`selling_price`='$selling_price',`rent_price`='$rent_price',`location`='$location', `fine`='$fine',WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        
        $_SESSION["msg"] = "SUCCESSFULLY UPDATED";
        header('Location: show.php?id='.$id);
    }
    return;
}
function clear()
{
    $s = "delete from cart where emp_id = " . $_SESSION["userId"] ." ";
    deleteAndUpdateQuery($s);

    header('Location: create.php?cid=0');
    return;
}
function books()
{
    $s = "select * from books";
    $jsonData = readQuery($s);
    $data = json_decode($jsonData);

    return $data;
}
function customers()
{
    $s = "select * from customers";
    $jsonData = readQuery($s);
    $data = json_decode($jsonData);

    return $data;
}
function delete($id = 0)
{
    $id = $_REQUEST["id"];
    // var_dump($id);
    $s = "delete from cart where id = " . $id;
    deleteAndUpdateQuery($s);

    header('Location: create.php?cid='.$_REQUEST['cid']);
    return;
}
if (isset($_REQUEST['add'])) {
    cart();
}
function cartBooks()
{
    if($_SESSION['auto'] != null)
    {
        $_SESSION['auto'] = "checked";
    }
    
    $s = "select * from cart_books where emp_id = " . $_SESSION["userId"] . " ";
    $jsonData = readQuery($s);
    $data = json_decode($jsonData);
    if(count($data) == 0)
    {
        $_SESSION['message']=null;
    }

    return $data;
}
function cart()
{
    // if (!isset($_REQUEST['product'])) {
    //     header('Location: create.php');
    //     return;
    // }
    $customerId = $_REQUEST['customerName'];
    if($_REQUEST['autoCheckBox'] == true)
    {
        $_SESSION['auto'] = "checked";
    }
    else
    {
        $_SESSION['auto'] = "";
    }
    

    $book_id = $_REQUEST['product'];
    $quantity = $_REQUEST['quantity'];
    $emp_id = $_SESSION["userId"];
    $customer_id=$customerId;

    if($book_id == "")
    {
        header('Location: create.php?cid='.$customerId);
        return;
    }
    $_SESSION['message']="true";
    
    $s = "select * from books where id = " . $book_id;
    $jsonData = readQuery($s);
    $data = json_decode($jsonData);
    if(count($data)  == 0)
    {
        $_SESSION['message']="false";
        header('Location: create.php?cid='.$customerId);
        return;
    }
    $s = "select * from cart where emp_id = " . $emp_id . " and book_id = " . $book_id;
    $jsonData = readQuery($s);
    $data = json_decode($jsonData);
    if (count($data) > 0) {
        $s = "update cart set quantity = quantity + " . $quantity . " where  emp_id = " . $emp_id . " and book_id = " . $book_id;
        $data = deleteAndUpdateQuery($s);
        header('Location: create.php?cid='.$customerId);
        return;
    }

    $s = "INSERT INTO `cart`(`id`, `book_id`, `quantity`, `emp_id`) VALUES (null," . $book_id . "," . $quantity . "," . $emp_id . ")";
    $id = executeQuery($s);

    // print_r($id);
    if ($id > 0) {
        
        header('Location: create.php?cid='.$customerId);
        return;
    }
    return $id;
}
if (isset($_REQUEST['invoiceStore'])) {
    invoiceStore();
}
function invoiceStore()
{
    $cid = $_REQUEST['customerName'];
    $empId= $_SESSION["userId"];
    if($cid == "" || $cid == 0)
    {
        return header('Location: create.php?cid='.$cid);
    }

    $s = "SELECT count(*) total from cart_books where emp_id = ".$empId;
    $jsonData = readQuery($s);
    $data = json_decode($jsonData);
    $totalBooks = $data[0]->total;

    if($totalBooks == 0)
    {
        return header('Location: create.php?cid='.$cid);
    }
    $s = "SELECT sum(selling_price * quantity) total from cart_books where emp_id = ".$empId;
    $jsonData = readQuery($s);
    $data = json_decode($jsonData);
    $total = $data[0]->total;
   //print_r($name);

    
   //print_r($name);
   
    
    $s = "INSERT INTO `invoices`(`id`, `amount`, `employee_id`, `customer_id`) VALUES (null, '$total', '$empId', '$cid')";
    $id = executeQuery($s);
    
    $s = "SELECT * from cart_books where emp_id = ".$empId;
    $jsonData = readQuery($s);
    $data = json_decode($jsonData);
    $books = $data;

    foreach($books as $b)
    {
        $totalPrice = $b->selling_price * $b->quantity;
        $s = "INSERT INTO `invoice_books`(`id`, `book_id`, `price`, `quantity`, `total_price`, `buying_price`, `invoice_id`) VALUES (null, '$b->book_id', '$b->selling_price', '$b->quantity', '$totalPrice', '$b->buying_price', '$id')";
        $bid = executeQuery($s);

        $s = "update books set quantity = quantity - '$b->quantity' where id = $b->book_id";
        $b = deleteAndUpdateQuery($s);
    }
    
    if($id > 0)
    {
        $s = "delete from cart where emp_id = " . $_SESSION["userId"] ." ";
        deleteAndUpdateQuery($s);
        return header('Location: print.php?id='.$id);
    }
    
    return;

}
function invoice()
{
    $id = $_REQUEST['id'];
    $s = "select i.*,e.name employee_name, c.name customer_name from invoices i, employees e, customers c where i.id = ".$id;
    $jsonData = readQuery($s);
    $data = json_decode($jsonData);

    return $data;
}
function invoiceBooks()
{
    $id = $_REQUEST['id'];
    $s = "select i.*,b.title book_title from invoice_books i, books b where invoice_id = ".$id ." and i.book_id = b.id";
    $jsonData = readQuery($s);
    $data = json_decode($jsonData);

    return $data;
}
function totalBooks()
{
    $id = $_REQUEST['id'];
    $s = "select count(*) total_books from invoice_books where invoice_id = ".$id ." ";
    $jsonData = readQuery($s);
    $data = json_decode($jsonData);

    return $data;
}