<?php include_once('baseController.php');

function index()
{
    $s = "select * from customers where column_status='ACTIVE' order by id";
    $customers = readQuery($s);
    $customers = json_decode($customers);
    return $customers;
}

function show()
{
    $id = $_REQUEST['id'];
    $s = "select * from customers where id = $id";
    $json = readQuery($s);                  //json
    $data = json_decode($json);             //array
    return $data;
}

//saving to data base
if(isset($_REQUEST['create']))
{
    store();
}
function store()
{
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $join_date = $_REQUEST['join_date'];
    $status = $_REQUEST['status'];
    
   
   //print_r($name);

    $s = "INSERT INTO `customers`(`id`, `name`, `phone`, `email`, `join_date`,`status`) VALUES (null,'$name', '$phone','$email','$join_date','$status')";
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
    $name = $_REQUEST['name'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['address'];
    $join_date = $_REQUEST['join_date'];
    $status = $_REQUEST['status'];
    

    $sql = "UPDATE `customers` SET `name`='$name',`phone`='$phone',`email`='$email',`join_date`='$join_date',`status`='$status',WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["msg"] = "SUCCESSFULLY UPDATED";
        header('Location: show.php?id='.$id);
    }
    return;
}

// delete
if(isset($_REQUEST['delete']))
{
    delete();
}
function delete()
{
    $id = $_POST['id'];

    $sql = "UPDATE `customers` SET column_status='DELETED' WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["msg"] = "SUCCESSFULLY DELETED";
        header('Location: index.php?id='.$id);
    }
    return;
}