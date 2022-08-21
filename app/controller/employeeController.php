<?php include_once('baseController.php');

function index()
{
    $s = "select * from employees";
    $employees = readQuery($s);
    $employees = json_decode($employees);
    return $employees;
}

function show()
{
    $id = $_REQUEST['id'];
    $s = "select * from employees where id = $id";
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
    $type = $_REQUEST['type'];
    $address = $_REQUEST['address'];
    $salary = $_REQUEST['salary'];
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
   
   //print_r($name);

    $s = "INSERT INTO `employees`(`id`, `name`, `phone`,`type`, `address`, `salary`,`username`,`password`) VALUES (null,'$name', '$phone','$type','$address','$salary','$username','$password')";
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
    $address = $_REQUEST['address'];
    $join_date = $_REQUEST['join_date'];
    $salary = $_REQUEST['salary'];
    $type = $_REQUEST['type'];
    $sql = "UPDATE `employees` SET `name`='$name',`phone`='$phone',`address`='$address',`join_date`='$join_date',`salary`='$salary',`username`='$username',`password`='$password',WHERE id=$id";
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

    $sql = "UPDATE `employees` SET column_status='DELETED' WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["msg"] = "SUCCESSFULLY DELETED";
        header('Location: index.php?id='.$id);
    }
    return;
}