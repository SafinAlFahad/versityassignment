<?php include_once('baseController.php');

function index()
{
    $s = "select * from categories where column_status='ACTIVE' order by id ";
    $categories = readQuery($s);
    $categories = json_decode($categories);
    return $categories;
}

function show()
{
    $id = $_REQUEST['id'];
    $s = "select * from categories where id = $id";
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

   
   //print_r($name);

    $s = "INSERT INTO `categories`(`id`, `name`) VALUES (null,'$name')";
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

    $sql = "UPDATE `categories` SET `name`='$name',WHERE id=$id";
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

    $sql = "UPDATE `categories` SET column_status='DELETED' WHERE id=$id";
    $data = deleteAndUpdateQuery($sql);

    if($data == 1)
    {
        $_SESSION["msg"] = "SUCCESSFULLY DELETED";
        header('Location: index.php?id='.$id);
    }
    return;
}